<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeeComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $sort = "asc";
    public $sort_column = 'created_at';
    public $disabled;
    public $delete;

    public $employee_id;
    public $name;
    public $code;
    public $email;
    public $profile;
    public $roles=[];
    public $users=[];



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
        $this->name = null;
        $this->code = null;
        $this->email = null;
        $this->profile = null;
        $this->disabled = null;
    }

    public function search()
    {
        dd('test');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'code' => 'required',
            'email' => 'required',
        ], [
            'name.required' => 'Require',
            'code.required' => 'Require',
            'email.required' => 'Require',
        ]);
        Employee::create([
            'name' => $this->name,
            'code' => $this->code,
            'email' => $this->email,
            'profile' => $this->profile,
            'created_by' => Auth::user()->id
        ]);

        $this->dispatchBrowserEvent('livewireUpdated');
    }

    public function edit($id)
    {
        $this->delete = null;
        $this->employee_id = $id;
        $employee = Employee::find($id);
        $this->name = $employee->name;
        $this->code = $employee->code;
        $this->email = $employee->email;
        $this->profile = $employee->profile;
        $this->emit('childRefresh', $this->employee_id);
    }

    public function update()
    {
        Employee::find($this->employee_id)->update([
            'name' => $this->name,
            'code' => $this->code,
            'email' => $this->email,
            'profile' => $this->profile,
            'updated_by' => Auth::user()->id
        ]);
        $this->dispatchBrowserEvent('livewireUpdated');
    }

    public function view($disabled, $id)
    {
        $this->delete = null;
        $this->employee_id = $id;
        $employee = Employee::find($id);
        $this->name = $employee->name;
        $this->code = $employee->code;
        $this->email = $employee->email;
        $this->profile = $employee->profile;
        $this->disabled = $disabled;
    }

    public function deleteConfirmation($id, $delete)
    {
        $this->employee_id = $id;
        $this->delete = $delete;
    }

    public function delete()
    {
        Employee::find($this->employee_id)->delete();
        $this->employee_id = null;
        $this->delete = null;
    }

    public function companyChange()
    {
        // $companies = Company::where('comapny_code','Like',)
    }

    public function render()
    {

        $table = new Employee();
        $columns = $table->getTableColumns('role_user');
        return view('livewire.employee-component', [
            'employees' => Employee::when($this->search, function ($q) use ($columns) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'LIKE', $this->search . '%');
                }
            })
                ->orderBy($this->sort_column, $this->sort)
                ->paginate(15),
        ]);
    }
}


