<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table='rol';

    protected $fillable = [
        'name', 'guard_name','usuario_id'
    ];
}
