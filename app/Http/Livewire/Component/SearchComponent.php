<?php

namespace App\Http\Livewire\Component;

use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SearchComponent extends Component
{
    public $query;
    public $contacts;
    public $highlightIndex;
    public $t_id;
    public $table_name;
    public $table_id;
    public $table_search_column;
    public $table_search_column1;
    public $name;
    public $table_default_value;
    public $where_con;
    public $disabled;
    protected $listeners = [
        'childRefresh'
    ];

    public function childRefresh($id)
    {
        $this->t_id = $id;
        $this->setData($id);
    }

   

    public function mount($table_name, $table_search_column, $name, $table_default_value = null, $table_search_column1 = null,$disabled=null,$where_con=null)
    {
        $this->table_name = $table_name;
        $this->table_search_column = $table_search_column;
        $this->table_search_column1 = $table_search_column1;
        $this->name = $name;
        $this->table_default_value = $table_default_value;
        $this->disabled = $disabled;
        $this->where_con = $where_con;

        // $this->reset1();
        if ($table_default_value) {
            $this->setData($table_default_value);
        } else {
            $this->query = null;
        }
    }

    public function resultClick($id)
    {
        $table_id = $this->table_id;
        $search_column_name = $this->table_search_column;
        $d = DB::table($this->table_name)->where($this->table_id, $id)->first();

        if ($d) {
            $this->query = $d->$search_column_name;
            $this->table_id = $d->$table_id;
            $this->reset1();
            $this->emit('getTableId', $this->table_id, $this->name);
        }
    }

    public function reset1()
    {
        // $this->query = '';
        $this->contacts = [];
        $this->highlightIndex = 0;
    }

    public function incrementHighlight()
    {
        if ($this->highlightIndex === count($this->contacts) - 1) {
            $this->highlightIndex = 0;
            return;
        }
        $this->highlightIndex++;
    }

    public function decrementHighlight()
    {
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->contacts) - 1;
            return;
        }
        $this->highlightIndex--;
    }

    public function setData($id)
    {
        $table_search_column = $this->table_search_column;
        $get_row = DB::table($this->table_name)->where('id', $id)->first();
        if ($get_row) {
            $this->query = $get_row->$table_search_column;
            $this->table_id = $get_row->id;
            $this->emit('getTableId', $this->table_id, $this->name);
            $this->reset1();
        }
    }

    public function queryClick()
    {
        if (strlen($this->query) == 0) {
            $this->contacts = json_decode(json_encode(DB::table($this->table_name)
            ->when($this->where_con, function ($q) {
                $q->where('id', $this->where_con);
            })
                ->orderBy($this->table_search_column, 'asc')
                ->take(15)
                ->get()), true);
        }
    }

    public function updatedQuery()
    {
        $this->contacts = json_decode(json_encode(DB::table($this->table_name)
            ->where($this->table_search_column, 'like', '%' . $this->query . '%')
            ->when($this->table_search_column1, function ($q) {
                $q->orWhere($this->table_search_column1, 'like', '%' . $this->query . '%');
            })
            ->when($this->where_con, function ($q) {
                $q->where('id', $this->where_con);
            })
            ->orderBy($this->table_search_column, 'asc')
            ->take(15)
            ->get()), true);
    }
    public function render()
    {
        return view('livewire.component.search-component');
    }
}
