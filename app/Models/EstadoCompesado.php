<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCompesado extends Model
{
    protected $fillable = [
        'estado',
    ];

    // Relación con Compesados
    public function compesados()
    {
        return $this->hasMany(Compesado::class, 'id_estado_compesado');
    }
}
