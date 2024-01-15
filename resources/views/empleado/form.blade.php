<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $empleado->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $empleado->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nacimiento') }}
            {{ Form::text('fecha_nacimiento', $empleado->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo_huella') }}
            {{ Form::text('codigo_huella', $empleado->codigo_huella, ['class' => 'form-control' . ($errors->has('codigo_huella') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Huella']) }}
            {!! $errors->first('codigo_huella', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo_huella_2') }}
            {{ Form::text('codigo_huella_2', $empleado->codigo_huella_2, ['class' => 'form-control' . ($errors->has('codigo_huella_2') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Huella 2']) }}
            {!! $errors->first('codigo_huella_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tipo_empleado') }}
            {{ Form::text('id_tipo_empleado', $empleado->id_tipo_empleado, ['class' => 'form-control' . ($errors->has('id_tipo_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo Empleado']) }}
            {!! $errors->first('id_tipo_empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_horario') }}
            {{ Form::text('id_horario', $empleado->id_horario, ['class' => 'form-control' . ($errors->has('id_horario') ? ' is-invalid' : ''), 'placeholder' => 'Id Horario']) }}
            {!! $errors->first('id_horario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_cargo') }}
            {{ Form::text('id_cargo', $empleado->id_cargo, ['class' => 'form-control' . ($errors->has('id_cargo') ? ' is-invalid' : ''), 'placeholder' => 'Id Cargo']) }}
            {!! $errors->first('id_cargo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_area') }}
            {{ Form::text('id_area', $empleado->id_area, ['class' => 'form-control' . ($errors->has('id_area') ? ' is-invalid' : ''), 'placeholder' => 'Id Area']) }}
            {!! $errors->first('id_area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_categoria') }}
            {{ Form::text('id_categoria', $empleado->id_categoria, ['class' => 'form-control' . ($errors->has('id_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Id Categoria']) }}
            {!! $errors->first('id_categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>