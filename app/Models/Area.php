<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'area',
    ];

    // Relación con Empleados
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_area');
    }
}
