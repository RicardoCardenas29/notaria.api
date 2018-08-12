<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';

    protected $fillable = [
        'nombre',
        'pais_id',
    ];

    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }

    public function municipio()
    {
        return $this->hasMany(Municipio::class)->with('corregimiento');
    }
}
