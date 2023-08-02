<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use App\Models\OrderStatus;
use App\Models\WorkOrder;
use Illuminate\Support\Facades\Auth;
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
        $this->workorder_id = null;
        $this->customer_id = null;
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
    }

    public function search()
    {
        dd('test');
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
        if($this->image)
        {
           
            $image = $this->image->getClientOriginalName();
            $filename = $this->image->storeAs('public/images/workorder/'.$image ,'public');
        }
      $workorder =  WorkOrder::create([
            'customer_id' => $this->customer_id,
            'process_id' => $this->process_id,
            'image' => $filename,
            'job_id' => $this->job_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'title' => $this->title,
            'info' => $this->info,
             'po_number' => $this->po_number,
              'budget' => $this->budget,
            'created_by' => Auth::user()->id
        ]);
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

        // $this->image = $workorder->image;
        // $this->emit('childRefresh', $this->workorder_id);
    }

    public function update()
    {
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
            'updated_by' => Auth::user()->id
        ]);
        OrderStatus::create([
            'work_order_id' => $this->workorder_id,
            'work_order_id' => 1,
            'updated_by' => Auth::user()->id
        ]);
        $this->dispatchBrowserEvent('livewireUpdated');
    }

    public function view($disabled, $id)
    {
        $this->delete = null;
        $this->workorder_id = $id;
        $employee = WorkOrder::find($id);
        $this->disabled = $disabled;
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

        // dd(WorkOrder::first()->status());
        $table = new WorkOrder();
        $columns = $table->getTableColumns('role_user');
        return view('livewire.workorder-component', [
            'workorders' => WorkOrder::with('statuses')->when($this->search, function ($q) use ($columns) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'LIKE', $this->search . '%');
                }
            })
                ->orderBy($this->sort_column, $this->sort)
                ->paginate(15),
        ]);
    }
}


