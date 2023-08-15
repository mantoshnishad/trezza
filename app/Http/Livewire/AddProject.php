<?php

namespace App\Http\Livewire;

use App\Models\NumberSequence;
use App\Models\OrderStatus;
use App\Models\User;
use App\Models\WorkOrder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    public $ref_image;
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
            'ref_image' => 'required',
            'budget' => 'nullable|numeric',
        ], [
            'title.required' => 'Require',
            'info.required' => 'Require',
            'ref_image.required' => 'Require',
        ]);

        if($this->ref_image)
        {
            $image = time().$this->ref_image->getClientOriginalName();
            $filename = $this->ref_image->storeAs('images/workorder',$image,'public');
        }
        $job_id = $this->generateAutoNumber('TJ',23);
      $workorder =  WorkOrder::create([
        'job_id' => $job_id,
            'customer_id' => $customer,
            'image' => $filename,
            'end_date' => $this->end_date,
            'title' => $this->title,
            'info' => $this->info,
            'po_number' => $this->po_number,
            'budget' => $this->budget,
            'created_by' => Auth::id(),
            'status_id' => 1,
        ]);
        
      $status=  OrderStatus::create([
            'work_order_id' => $workorder->id,
            'status_id' => 1,
            'created_by' => Auth::user()->id
        ]);
        if($workorder && $status)
        {

            $this->msg="Project addedd successfuly...";
        }

        $this->info=null;
        $this->end_date=null;
        $this->po_number=null;
        $this->budget=null;
        $this->title=null;
    }
}
