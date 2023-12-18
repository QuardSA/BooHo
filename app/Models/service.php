<?php

namespace App\Models;

use App\Models\type_object;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $fillable = [
        'title_service',
    ];
    public function object_service()
    {
        return $this->hasMany(type_object::class, 'service', 'id');
    }
}
