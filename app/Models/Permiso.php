<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $fillable = [
        'fecha_creacion',
        'permiso_desde',
        'permiso_hasta',
        'justificacion',
        'observaciones',
        'id_empleado',
        'id_tipo_permiso',
        'id_estado_permiso',
    ];

    // Relación con Empleado
    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }

    // Relación con TipoPermiso
    public function tipoPermiso()
    {
        return $this->belongsTo(TipoPermiso::class, 'id_tipo_permiso');
    }

    // Relación con EstadoPermiso
    public function estadoPermiso()
    {
        return $this->belongsTo(EstadoPermiso::class, 'id_estado_permiso');
    }
}
