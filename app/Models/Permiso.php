<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permiso
 *
 * @property $id
 * @property $fecha_creacion
 * @property $permiso_desde
 * @property $permiso_hasta
 * @property $justificacion
 * @property $observaciones
 * @property $id_empleado
 * @property $id_tipo_permiso
 * @property $id_estado_permiso
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @property EstadoPermiso $estadoPermiso
 * @property TipoPermiso $tipoPermiso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Permiso extends Model
{
    
    static $rules = [
		'fecha_creacion' => 'required',
		'permiso_desde' => 'required',
		'permiso_hasta' => 'required',
		'justificacion' => 'required',
		'observaciones' => 'required',
		'id_empleado' => 'required',
		'id_tipo_permiso' => 'required',
		'id_estado_permiso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_creacion','permiso_desde','permiso_hasta','justificacion','observaciones','id_empleado','id_tipo_permiso','id_estado_permiso'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'id_empleado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estadoPermiso()
    {
        return $this->hasOne('App\Models\EstadoPermiso', 'id', 'id_estado_permiso');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoPermiso()
    {
        return $this->hasOne('App\Models\TipoPermiso', 'id', 'id_tipo_permiso');
    }
    

}
