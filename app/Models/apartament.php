<?php

namespace App\Models;

use App\Models\type_object;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apartament extends Model
{
    protected $fillable = [
        "title_apartaments",
        "count_people",
        "cost",
        "photo",
    ];

    public function appartaments_object(){
        return $this->belongsTo(type_object::class, 'Object', 'id');
    }
}
