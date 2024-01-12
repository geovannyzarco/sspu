<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoPermiso extends Model
{
    protected $fillable = [
        'estado',
    ];

    // Relación con Permisos
    public function permisos()
    {
        return $this->hasMany(Permiso::class, 'id_estado_permiso');
    }

}
