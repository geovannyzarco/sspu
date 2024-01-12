<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'codigo',
        'nombre',
        'fecha_nacimiento',
        'codigo_huella',
        'codigo_huella_2',
        'id_tipo_empleado',
        'id_horario',
        'id_cargo',
        'id_area',
        'id_categoria',
    ];

    // Relación con TipoEmpleado
    public function tipoEmpleado()
    {
        return $this->belongsTo(TipoEmpleado::class, 'id_tipo_empleado');
    }

    // Relación con Horario
    public function horario()
    {
        return $this->belongsTo(Horario::class, 'id_horario');
    }

    // Relación con Cargo
    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'id_cargo');
    }

    // Relación con Area
    public function area()
    {
        return $this->belongsTo(Area::class, 'id_area');
    }

    // Relación con Categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

}
