<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class WorkOrderUpload extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function delete()
    {
        $this->deleted_by = Auth::user()->id;
        $this->save();
        return parent::delete();
    }

    function images() {
        return $this->hasMany(OrderImage::class,'work_order_upload_id');
    }
    function comments() {
        return $this->hasMany(OrderComment::class,'work_order_upload_id');
    }
}
