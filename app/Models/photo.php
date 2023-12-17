<?php

namespace App\Models;

use App\Models\type_object;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $fillable = ['cile_photo', 'object'];

    public function object_photo()
    {
        return $this->belongsTo(type_object::class, 'object', 'id');
    }
}
