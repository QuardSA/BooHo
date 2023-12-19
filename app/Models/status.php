<?php

namespace App\Models;

use App\Models\order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_status extends Model
{
    protected $fillabel=[
        'title_status'
    ];

    public function orders_status(){
        return $this->hasMany(order::class, 'status', 'id');
    }
}
