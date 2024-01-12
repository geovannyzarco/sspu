<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEmpleado extends Model
{
    protected $fillable = [
        'tipo_empleado',
        'cant_hora_personales',
    ];

    // Relación con Empleados
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_tipo_empleado');
    }
}
