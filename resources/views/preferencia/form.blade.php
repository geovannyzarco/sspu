<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('dependecia') }}
            {{ Form::text('dependecia', $preferencia->dependecia, ['class' => 'form-control' . ($errors->has('dependecia') ? ' is-invalid' : ''), 'placeholder' => 'Dependecia']) }}
            {!! $errors->first('dependecia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_jefe') }}
            {{ Form::text('nombre_jefe', $preferencia->nombre_jefe, ['class' => 'form-control' . ($errors->has('nombre_jefe') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Jefe']) }}
            {!! $errors->first('nombre_jefe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $preferencia->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $preferencia->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>