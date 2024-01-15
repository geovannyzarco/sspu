<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_creacion') }}
            {{ Form::text('fecha_creacion', $compesado->fecha_creacion, ['class' => 'form-control' . ($errors->has('fecha_creacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Creacion']) }}
            {!! $errors->first('fecha_creacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inicio_compensado') }}
            {{ Form::text('inicio_compensado', $compesado->inicio_compensado, ['class' => 'form-control' . ($errors->has('inicio_compensado') ? ' is-invalid' : ''), 'placeholder' => 'Inicio Compensado']) }}
            {!! $errors->first('inicio_compensado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fin_compensado') }}
            {{ Form::text('fin_compensado', $compesado->fin_compensado, ['class' => 'form-control' . ($errors->has('fin_compensado') ? ' is-invalid' : ''), 'placeholder' => 'Fin Compensado']) }}
            {!! $errors->first('fin_compensado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('justificacion') }}
            {{ Form::text('justificacion', $compesado->justificacion, ['class' => 'form-control' . ($errors->has('justificacion') ? ' is-invalid' : ''), 'placeholder' => 'Justificacion']) }}
            {!! $errors->first('justificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('adjunto') }}
            {{ Form::text('adjunto', $compesado->adjunto, ['class' => 'form-control' . ($errors->has('adjunto') ? ' is-invalid' : ''), 'placeholder' => 'Adjunto']) }}
            {!! $errors->first('adjunto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $compesado->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estado_compesado') }}
            {{ Form::text('id_estado_compesado', $compesado->id_estado_compesado, ['class' => 'form-control' . ($errors->has('id_estado_compesado') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado Compesado']) }}
            {!! $errors->first('id_estado_compesado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_empleado') }}
            {{ Form::text('id_empleado', $compesado->id_empleado, ['class' => 'form-control' . ($errors->has('id_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id Empleado']) }}
            {!! $errors->first('id_empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>