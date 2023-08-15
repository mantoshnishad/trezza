<?php

namespace App\Http\Livewire;

use App\Models\ApprovalStatus;
use App\Models\Employee;
use App\Models\NumberSequence;
use App\Models\OrderComment;
use App\Models\OrderImage;
use App\Models\OrderStatus;
use App\Models\Process;
use App\Models\User;
use App\Models\WorkOrder;
use App\Models\WorkOrderAssign;
use App\Models\WorkOrderUpload;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class WorkorderComponent extends Component
{
    use WithPagination, WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $sort = "asc";
    public $sort_column = 'created_at';
    public $disabled;
    public $delete;

    public $workorder_id;
    public $customer_id;
    public $process_id;
    public $status_id;
    public $job_id;
    public $start_date;
    public $end_date;
    public $title;
    public $info;
    public $comment;
    public $comment_image;
    public $image;
    public $po_number;
    public $budget;
    public $employee_id;
    public $image_edit;
    public $workorder;
    public $action;
    public $upload_images=[];
    public $approved_statuses=[];
    public $approval_status_text;
    public $status_text;
    public $approval_comment;
    public $approval_status_id;
    public $customer_disabled;
    public $role_id;
    public $new_process_id;
    public $processes =[];
    public $old_workorders=[];


    protected $listeners = [
        'getTableId'
    ];

    public function getTableId($table_id, $column_code)
    {
        $this->$column_code = $table_id;
    }

    public function sort($column)
    {
        $this->sort_column = $column;
        $this->sort == 'asc' ? $this->sort = 'desc' : $this->sort = 'asc';
    }

    public function mount()
    {
        
    }




    public function add()
    {
        $this->customer_id = null;
        $role=User::find(Auth::id())->roles()->first();
        if($role->id==2)
        {
            $this->customer_id = $role->pivot->table_id ?? null;
            $this->customer_disabled='disabled';
        }else{
            $this->customer_disabled=null;
        }
       
        $this->workorder_id = null;
        
        $this->process_id = null;
        $this->status_id = null;
        $this->job_id = null;
        $this->start_date = null;
        $this->end_date = null;
        $this->title = null;
        $this->info = null;
        $this->comment = null;
        $this->comment_image = null;
        $this->po_number = null;
        $this->budget = null;
        $this->disabled = null;
        $this->image_edit = null;
    }

    public function search()
    {
        dd('test');
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
        $filename=null;
        $this->validate([
            'title' => 'required',
            'info' => 'required',
        ], [
            'title.required' => 'Require',
            'info.required' => 'Require',
        ]);
        $job_id = $this->generateAutoNumber('TJ',23);
        if($this->image)
        {
           
            $image = $this->image->getClientOriginalName();
            $filename = $this->image->storeAs('images/workorder',$image,'public');
        }
      $workorder =  WorkOrder::create([
            'customer_id' => $this->customer_id,
            'process_id' => $this->process_id,
            'image' => $filename,
            'job_id' => $job_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'title' => $this->title,
            'info' => $this->info,
            'po_number' => $this->po_number,
            'budget' => $this->budget,
            'created_by' => Auth::user()->id,
            'status_id' => 1,
        ]);
        if($this->employee_id)
        {
            WorkOrderAssign::create([
                'work_order_id' => $workorder->id,
                'employee_id' => $this->employee_id,
                'created_by' => Auth::id(),
            ]);
        }
        OrderStatus::create([
            'work_order_id' => $workorder->id,
            'status_id' => 1,
            'created_by' => Auth::user()->id
        ]);

        $this->dispatchBrowserEvent('livewireUpdated');
    }

    public function edit($id)
    {
        $this->delete = null;
        $this->workorder_id = $id;
        $workorder = WorkOrder::find($id);
        $assign = WorkOrderAssign::where('work_order_id',$id)->first();
        $this->customer_id = $workorder->customer_id;
        $this->process_id = $workorder->process_id;
        $this->job_id = $workorder->job_id;
        $this->start_date = $workorder->start_date;
        $this->end_date = $workorder->end_date;
        $this->title = $workorder->title;
        $this->info = $workorder->info;
        $this->po_number = $workorder->po_number;
        $this->budget = $workorder->budget;
        $this->disabled = null;
        if($assign)
        {
            $this->employee_id=$assign->employee_id;
        }

        $this->image_edit = $workorder->image;
        // $this->emit('childRefresh', $this->workorder_id);
    }

    public function update()
    {
        $filename=null;
        if($this->image)
        {
            $image = $this->image->getClientOriginalName();
            $filename = $this->image->storeAs('images/workorder',$image,'public');
        }
        else{
            $filename=$this->image_edit;
        }
        WorkOrder::find($this->workorder_id)->update([
            'customer_id' => $this->customer_id,
            'process_id' => $this->process_id,
            'image' => $this->image,
            'job_id' => $this->job_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'title' => $this->title,
            'info' => $this->info,
            'po_number' => $this->po_number,
              'budget' => $this->budget,
              'image' => $filename  ,
              'status_id' => 1,
            'updated_by' => Auth::user()->id
        ]);

        if($this->employee_id)
        {
            WorkOrderAssign::create([
                'work_order_id' => $this->workorder_id,
                'employee_id' => $this->employee_id,
                'created_by' => Auth::id(),
            ]);
        }

        OrderStatus::create([
            'work_order_id' => $this->workorder_id,
            'status_id' => 1,
            'updated_by' => Auth::user()->id
        ]);
        $this->dispatchBrowserEvent('livewireUpdated');
    }

    public function view($disabled, $id)
    {
        $role=User::find(Auth::id())->roles()->first();
        $this->role_id = $role->id;
        $this->delete = null;
        $this->workorder_id = $id;
        $this->workorder = WorkOrder::find($id);
        $this->approved_statuses = ApprovalStatus::all();
        $this->disabled = $disabled;
        $this->processes = Process::all();
        $this->old_workorders = WorkOrder::where('id','!=',$id)->where('job_id',$this->workorder->job_id)->get();

    }

    function createNewProcess($id) {
        $workorder = WorkOrder::find($id);
        $workorder_new = $workorder->replicate(['id']);
        $workorder_new->process_id = $this->new_process_id;
        $workorder_new->start_date = now();
        $workorder_new->approval_status_id = null;
        $workorder_new->save();
        WorkOrder::find($id)->update([
            'status_id' => 2,
            'is_closed'=>1,
        ]);

    }

    function uploadShow($id,$action) {
        $this->delete = null;
        $this->workorder_id = $id;
        $this->action = $action;
        $this->workorder = WorkOrder::find($id);
        $this->disabled = null;
    }

    function deleteImg($id,$order_id) {
        OrderImage::find($id)->delete();
        $this->workorder = WorkOrder::find($order_id);
    }

    function upload() {
        // dd($this->upload_images);
        $assign = WorkOrderAssign::where('work_order_id',$this->workorder_id)->first();
       $upload= WorkOrderUpload::create([
            'work_order_id' => $this->workorder_id,
            'work_order_assign_id' => $assign->id,
            'for_approver_approval' => true,
            'employee_id' => $assign->employee_id,
            'status_id' => 3,
        ]);
        foreach($this->upload_images as $image)
        {
            $image_name = time().$image->getClientOriginalName();
            $filename = $image->storeAs('images/workorder',$image_name,'public');
            OrderImage::create([
                'work_order_id' => $this->workorder_id,
                'work_order_assign_id' => $assign->id,
                'work_order_upload_id' => $upload->id,
                'image' => $filename,
            ]);
        }
        $this->dispatchBrowserEvent('livewireUpdated');
    }

    function approvalSend($id) {


        $this->validate([
            'approval_comment' => 'required',
        ],[
            'approval_comment.required' => 'Require'
        ]);
        if($this->approval_status_id)
        {
            $role=User::find(Auth::id())->roles()->first();
            
            WorkOrderUpload::find($id)->update([
                'approval_status_id' => $this->approval_status_id,
                'for_customer_approval' => $this->approval_status_id==2 && $role->id==2 ? true : false,
            ]);
            WorkOrder::find($this->workorder_id)->update([
                'approval_status_id' => $this->approval_status_id,
            ]);
        }
        


        if(strlen($this->approval_comment)>0)
        {
            OrderComment::create([
                'work_order_id' => $this->workorder_id,
                'work_order_upload_id' => $id,
                'user_id' => Auth::id(),
                'comment' => $this->approval_comment,
                'attachment' => null,
            ]);
        }
        $this->workorder = WorkOrder::find($this->workorder_id);
        
    }

    public function deleteConfirmation($id, $delete)
    {
        $this->workorder_id = $id;
        $this->delete = $delete;
    }

    public function delete()
    {
        WorkOrder::find($this->workorder_id)->delete();
        $this->workorder_id = null;
        $this->delete = null;
    }

    public function companyChange()
    {
        // $companies = Company::where('comapny_code','Like',)
    }

    public function render()
    {
        $role=User::find(Auth::id())->roles()->first();
     
        $customer_id = $role->pivot->table_id ?? null;
        $table = new WorkOrder();
        $columns = $table->getTableColumns('role_user');
        return view('livewire.workorder-component', [
            'workorders' => WorkOrder::with('statuses')->when($this->search, function ($q) use ($columns) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'LIKE', $this->search . '%');
                }
            })
            ->when($role->id==2,function($query)use($customer_id){
                $query->where('customer_id',$customer_id);
                
            })
            ->when($role->id==3,function($query)use($customer_id){
                $query->whereHas('assign',function($query)use($customer_id){
                    $query->where('employee_id',$customer_id);
                });
                
            })
            ->where('is_closed',0)
                ->orderBy($this->sort_column, $this->sort)
                ->paginate(15),
                'role' => $role->pivot->role_id ?? null,
        ]);
    }
}


