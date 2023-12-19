<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\type_object;
use Illuminate\Database\Eloquent\Model;

class apartament extends Model
{
    protected $fillable = ['title_apartaments', 'count_people', 'cost', 'photo'];

    public function object_appartaments()
    {
        return $this->hasMany(type_object::class, 'apartament','id');
    }
}
