<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compesado
 *
 * @property $id
 * @property $fecha_creacion
 * @property $inicio_compensado
 * @property $fin_compensado
 * @property $justificacion
 * @property $adjunto
 * @property $observaciones
 * @property $id_estado_compesado
 * @property $id_empleado
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @property EstadoCompesado $estadoCompesado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compesado extends Model
{
    
    static $rules = [
		'fecha_creacion' => 'required',
		'inicio_compensado' => 'required',
		'fin_compensado' => 'required',
		'justificacion' => 'required',
		'adjunto' => 'required',
		'observaciones' => 'required',
		'id_estado_compesado' => 'required',
		'id_empleado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_creacion','inicio_compensado','fin_compensado','justificacion','adjunto','observaciones','id_estado_compesado','id_empleado'];


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
    public function estadoCompesado()
    {
        return $this->hasOne('App\Models\EstadoCompesado', 'id', 'id_estado_compesado');
    }
    

}
