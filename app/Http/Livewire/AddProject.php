<?php

namespace App\Http\Livewire;

use App\Mail\AddProject as MailAddProject;
use App\Models\NumberSequence;
use App\Models\OrderStatus;
use App\Models\Project;
use App\Models\ProjectRefFile;
use App\Models\User;
use App\Models\WorkOrder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProject extends Component
{
    use WithFileUploads;
    public $disabled;
    public $end_date;
    public $title;
    public $info;
    public $po_number;
    public $budget;
    public $ref_images=[];
    public $cad_file;
    public $msg;


    public function render()
    {
        return view('livewire.add-project');
    }

    public function generateAutoNumber($prefix, $year)
{
    
    return DB::transaction(function () use ($prefix, $year) {
        $sequence = NumberSequence::lockForUpdate()->firstOrNew(['prefix' => $prefix, 'year' => $year]);

        if ($sequence->exists) {
            $lastNumber = $sequence->last_number;
            $nextNumber = $lastNumber + 1;
        } else {
            $nextNumber = 1;
        }

        $sequence->prefix = $prefix;
        $sequence->year = $year;
        $sequence->last_number = $nextNumber;
        $sequence->save();

        $formattedNumber = sprintf('%s-%02d-%05d', $prefix, $year % 100, $nextNumber);
        return $formattedNumber;
    });
}

    public function store()
    {
        $user = User::find(Auth::id())->customer;
        $customer= $user->id ?? null;
        $filename=null;
        
        $this->validate([
            'title' => 'required',
            'info' => 'required',
            'ref_images' => 'required',
            'budget' => 'nullable|numeric',
        ], [
            'title.required' => 'Require',
            'info.required' => 'Require',
            'ref_image.required' => 'Require',
        ]);

      
        $job_id = $this->generateAutoNumber('TJ',23);
        $project = Project::create([
            'code' => $job_id,
            'title' => $this->title,
            'desc' => $this->info,
            'customer_id' => $customer,
            'status_id' => 1,
            'created_by' => Auth::id(),
        ]);
      $workorder =  WorkOrder::create([
            'project_id' => $project->id,
            'job_id' => $job_id,
            'customer_id' => $customer,
            'image' => null,
            'end_date' => $this->end_date,
            'title' => $this->title,
            'info' => $this->info,
            'po_number' => $this->po_number,
            'budget' => $this->budget,
            'created_by' => Auth::id(),
            'status_id' => 1,
        ]);
        foreach($this->ref_images as $ref_image)
        {
            $ext = $ref_image->getClientOriginalExtension();
            $image = $job_id.'_'.time().$ref_image->getClientOriginalName();
            $filename = $ref_image->storeAs('images/workorder/'.$job_id,$image,'public');
            ProjectRefFile::create([
                'project_id' => $project->id,
                'workorder_id' => $workorder->id,
                'url'=> $filename,
                'ext'=> $ext,
                'created_by' => Auth::id(),
            ]);
        }
        
      $status=  OrderStatus::create([
            'work_order_id' => $workorder->id,
            'status_id' => 1,
            'created_by' => Auth::user()->id
        ]);

        if($workorder && $status)
        {
            $this->msg="Project addedd successfuly...";
        }
        $data=[
            'job_id' => $job_id,
            'customer' => $user->name,
            'title' => $this->title,
            'info' => $this->info,
            'po_number' => $this->po_number,
            'budget' => $this->budget,
        ];
        Mail::to('mantoshdnishad@gmail.com')->send(new MailAddProject($data));
        $this->info=null;
        $this->end_date=null;
        $this->po_number=null;
        $this->budget=null;
        $this->title=null;
        $this->ref_images =[];
    }
}
