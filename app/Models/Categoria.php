<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'categoria',
    ];

    // Relación con Empleados
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_categoria');
    }
}
