<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compesado extends Model
{
    protected $fillable = [
        'fecha_creacion',
        'inicio_compensado',
        'fin_compensado',
        'justificacion',
        'adjunto',
        'observaciones',
        'id_estado_compesado',
        'id_empleado',
    ];

    // Relación con EstadoCompesado
    public function estadoCompesado()
    {
        return $this->belongsTo(EstadoCompesado::class, 'id_estado_compesado');
    }
        // Relación con Empleado
    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }
}
