<?php

namespace App\Models;


use App\Models\type_object;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_placement extends Model
{
    protected $fillable = [
        'title_placement',
    ];
    public function object_placement(){
        return $this->hasMany(type_object::class, 'placement','id');
    }
}
