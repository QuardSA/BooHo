<?php

namespace App\Models;

use App\Models\service;
use App\Models\type_placement;
use App\Models\apartament;
use App\Models\order;
use App\Models\country;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_object extends Model
{
    protected $fillable = ['title_object', 'description', 'country', 'placement', 'service', 'category', 'photo', 'apartament', 'check_in', 'check_out', 'user', 'address', 'city'];

    protected $table = 'type_objects';

    public function country_object()
    {
        return $this->belongsTo(country::class, 'country');
    }

    public function apartament_object()
    {
        return $this->belongsTo(apartament::class, 'apartament');
    }

    public function service_object()
    {
        return $this->belongsTo(service::class, 'service');
    }
    public function placement_object()
    {
        return $this->belongsTo(type_placement::class, 'placement');
    }
    public function order_object(){
        return $this-> hasOne(order::class, 'object', 'id');
    }
}
