<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_creacion') }}
            {{ Form::text('fecha_creacion', $permiso->fecha_creacion, ['class' => 'form-control' . ($errors->has('fecha_creacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Creacion']) }}
            {!! $errors->first('fecha_creacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('permiso_desde') }}
            {{ Form::text('permiso_desde', $permiso->permiso_desde, ['class' => 'form-control' . ($errors->has('permiso_desde') ? ' is-invalid' : ''), 'placeholder' => 'Permiso Desde']) }}
            {!! $errors->first('permiso_desde', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('permiso_hasta') }}
            {{ Form::text('permiso_hasta', $permiso->permiso_hasta, ['class' => 'form-control' . ($errors->has('permiso_hasta') ? ' is-invalid' : ''), 'placeholder' => 'Permiso Hasta']) }}
            {!! $errors->first('permiso_hasta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('justificacion') }}
            {{ Form::text('justificacion', $permiso->justificacion, ['class' => 'form-control' . ($errors->has('justificacion') ? ' is-invalid' : ''), 'placeholder' => 'Justificacion']) }}
            {!! $errors->first('justificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $permiso->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_empleado') }}
            {{ Form::text('id_empleado', $permiso->id_empleado, ['class' => 'form-control' . ($errors->has('id_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id Empleado']) }}
            {!! $errors->first('id_empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tipo_permiso') }}
            {{ Form::text('id_tipo_permiso', $permiso->id_tipo_permiso, ['class' => 'form-control' . ($errors->has('id_tipo_permiso') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo Permiso']) }}
            {!! $errors->first('id_tipo_permiso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estado_permiso') }}
            {{ Form::text('id_estado_permiso', $permiso->id_estado_permiso, ['class' => 'form-control' . ($errors->has('id_estado_permiso') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado Permiso']) }}
            {!! $errors->first('id_estado_permiso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>