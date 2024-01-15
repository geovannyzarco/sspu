<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadoCompesado
 *
 * @property $id
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Compesado[] $compesados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EstadoCompesado extends Model
{
    
    static $rules = [
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compesados()
    {
        return $this->hasMany('App\Models\Compesado', 'id_estado_compesado', 'id');
    }
    

}
