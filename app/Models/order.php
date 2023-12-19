<?php

namespace App\Models;
use App\Models\status;
use App\Models\type_object;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [
        'object','status','id'
    ];
    public function object_order(){
        return $this->belongsTo(type_object::class, 'object', 'id');
    }
    public function status_order(){
        return $this-> belongsTo(status::class, 'status', 'id');
    }
}
