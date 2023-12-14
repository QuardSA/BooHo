<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apartament extends Model
{
    protected $fillable = [
        "Title_apartaments";
        "Count_people";
        "Cost";
        "Photo";
    ];
}
