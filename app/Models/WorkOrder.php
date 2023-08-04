<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class WorkOrder extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function delete()
    {
        $this->deleted_by = Auth::user()->id;
        $this->save();
        return parent::delete();
    }
    
    public function getTableColumns($table)
    {
        return Schema::getColumnListing($table);
    }

    function customer() {
        return $this->belongsTo(Customer::class);
    }
    function process() {
        return $this->belongsTo(Process::class);
    }

    function statuses() {
        return $this->belongsToMany(Status::class,'order_statuses');
    }

    function status() {
        return $this->belongsTo(Status::class,'status_id');
    }
    
    function approvalStatus() {
        return $this->belongsTo(ApprovalStatus::class,'approval_status_id');
    }

    function assign() {
        return $this->hasOne(WorkOrderAssign::class,'work_order_id')->orderBy('created_at','desc');
    }

    function uploads() {
        return $this->hasMany(WorkOrderUpload::class,'work_order_id')->orderBy('created_at','desc');
    }

    function upload() {
        return $this->hasOne(WorkOrderUpload::class,'work_order_id')->orderBy('created_at','desc');
    }
}
