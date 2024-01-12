<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPermiso extends Model
{
    protected $fillable = [
        'tipo_permiso',
    ];

    // Relación con Permisos
    public function permisos()
    {
        return $this->hasMany(Permiso::class, 'id_tipo_permiso');
    }
}
