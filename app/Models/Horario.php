<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'horarios',
        'entrada',
        'salida',
        'cant_dia',
        'cant_horas',
    ];

    // Relación con Empleados
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_horario');
    }
}
