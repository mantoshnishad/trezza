<?php

namespace App\Http\Livewire;

use App\Models\OrderStatus;
use App\Models\User;
use App\Models\WorkOrder;
use Illuminate\Support\Facades\Auth;
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

    public function store()
    {
        $user = User::find(Auth::id())->customer;
        $customer= $user->id ?? null;
        $filename=null;
        $this->validate([
            'title' => 'required',
            'info' => 'required',
        ], [
            'title.required' => 'Require',
            'info.required' => 'Require',
        ]);
        if($this->ref_image)
        {
           
            $image = $this->ref_image->getClientOriginalName();
            $filename = $this->ref_image->storeAs('images/workorder',$image,'public');
        }

      $workorder =  WorkOrder::create([
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

            $this->msg="Projecy addedd successfuly...";
        }
    }
}
