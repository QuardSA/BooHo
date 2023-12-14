<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class object extends Model
{
    protected $fillable = [
        "Title_object";
        "Description";
        "Country";
        "Placement";
        "Category";
        "Apartament";
        "Check_in";
        "Check_out";
        "User";
        "Address";
        "City";
    ];
}
