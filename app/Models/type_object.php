<?php

namespace App\Models;

use App\Models\apartament;
use App\Models\photo;
use App\Models\country;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_object extends Model
{
    protected $fillable = ['Title_object', 'Description', 'Country', 'Placement', 'Category', 'Apartament', 'Check_in', 'Check_out', 'User', 'Address', 'City'];

    public function country_object()
    {
        return $this->belongsTo(country::class, 'Country', 'id');
    }

    public function photo_object(){
        return $this->hasMany(photo::class, 'Object','id');
    }

    public function apartament(){
        return $this->hasMany(apartament::class, 'Object');
    }
}
