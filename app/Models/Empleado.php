<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $fecha_nacimiento
 * @property $codigo_huella
 * @property $codigo_huella_2
 * @property $id_tipo_empleado
 * @property $id_horario
 * @property $id_cargo
 * @property $id_area
 * @property $id_categoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @property Cargo $cargo
 * @property Categoria $categoria
 * @property Compesado[] $compesados
 * @property Horario $horario
 * @property Tipo $tipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'nombre' => 'required',
		'fecha_nacimiento' => 'required',
		'codigo_huella' => 'required',
		'codigo_huella_2' => 'required',
		'id_tipo_empleado' => 'required',
		'id_horario' => 'required',
		'id_cargo' => 'required',
		'id_area' => 'required',
		'id_categoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','fecha_nacimiento','codigo_huella','codigo_huella_2','id_tipo_empleado','id_horario','id_cargo','id_area','id_categoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function area()
    {
        return $this->hasOne('App\Models\Area', 'id', 'id_area');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cargo()
    {
        return $this->hasOne('App\Models\Cargo', 'id', 'id_cargo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'id_categoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compesados()
    {
        return $this->hasMany('App\Models\Compesado', 'id_empleado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function horario()
    {
        return $this->hasOne('App\Models\Horario', 'id', 'id_horario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo()
    {
        return $this->hasOne('App\Models\Tipo', 'id', 'id_tipo_empleado');
    }
    

}
