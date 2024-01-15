<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Preferencia
 *
 * @property $id
 * @property $dependecia
 * @property $nombre_jefe
 * @property $direccion
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Preferencia extends Model
{
    
    static $rules = [
		'dependecia' => 'required',
		'nombre_jefe' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dependecia','nombre_jefe','direccion','telefono'];



}
