<?php

namespace App\Models;

use App\Models\type_object;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $fillable = ['title_countries', 'photo'];

    public function object_country()
    {
        return $this->hasMany(type_object::class, 'country');
    }
}
