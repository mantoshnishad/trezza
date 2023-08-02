<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $sort = "asc";
    public $sort_column = 'created_at';
    public $disabled;
    public $delete;

    public $customer_id;
    public $name;
    public $code;
    public $email;
    public $phone;
    public $address;
    public $alternate_contact;



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
        $this->phone = null;
        $this->address = null;
        $this->alternate_contact = null;
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
            'phone' => 'required',
        ], [
            'name.required' => 'Require',
            'code.required' => 'Require',
            'email.required' => 'Require',
            'phone.required' => 'Require',
        ]);
        Customer::create([
            'name' => $this->name,
            'code' => $this->code,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'alternate_contact' => $this->alternate_contact,
            'created_by' => Auth::user()->id
        ]);

        $this->dispatchBrowserEvent('livewireUpdated');
    }

    public function edit($id)
    {
        $this->delete = null;
        $this->customer_id = $id;
        $customer = Customer::find($id);
        $this->name = $customer->name;
        $this->code = $customer->code;
        $this->email = $customer->email;
        $this->phone = $customer->phone;
        $this->address = $customer->address;
        $this->alternate_contact = $customer->alternate_contact;
        $this->emit('childRefresh', $this->customer_id);
    }

    public function update()
    {
        Customer::find($this->customer_id)->update([
            'name' => $this->name,
            'code' => $this->code,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'alternate_contact' => $this->alternate_contact,
            'updated_by' => Auth::user()->id
        ]);
        $this->dispatchBrowserEvent('livewireUpdated');
    }

    public function view($disabled, $id)
    {
        $this->delete = null;
        $this->customer_id = $id;
        $customer = customer::find($id);
        $this->name = $customer->name;
        $this->code = $customer->code;
        $this->email = $customer->email;
        $this->phone = $customer->phone;
        $this->address = $customer->address;
        $this->alternate_contact = $customer->alternate_contact;
        $this->disabled = $disabled;
    }

    public function deleteConfirmation($id, $delete)
    {
        $this->customer_id = $id;
        $this->delete = $delete;
    }

    public function delete()
    {
        Customer::find($this->customer_id)->delete();
        $this->customer_id = null;
        $this->delete = null;
    }

    public function companyChange()
    {
        // $companies = Company::where('comapny_code','Like',)
    }

    public function render()
    {

        $table = new Customer();
        $columns = $table->getTableColumns('role_user');
        return view('livewire.customer-component', [
            'customers' => Customer::when($this->search, function ($q) use ($columns) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'LIKE', $this->search . '%');
                }
            })
                ->orderBy($this->sort_column, $this->sort)
                ->paginate(15),
        ]);
    }
}


