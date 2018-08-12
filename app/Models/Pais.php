<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'pais';

    protected $fillable = [
        'nombre',
    ];

    public function departamento()
    {
        return $this->hasMany(Departamento::class)->with('municipio');
    }
}
