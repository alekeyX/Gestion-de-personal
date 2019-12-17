<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'nombre', 'unidad', 'ubicacion', 'piso', 'telefono', 'foto',
    ];

    public function scopeName($query, $nombre)
    {
        if (trim($nombre) != "")
        {

            $query->where('nombre', "LIKE", "%$nombre%");
        }
        
    }
}

