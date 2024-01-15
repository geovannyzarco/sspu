<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_permiso') }}
            {{ Form::text('tipo_permiso', $tipoPermiso->tipo_permiso, ['class' => 'form-control' . ($errors->has('tipo_permiso') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Permiso']) }}
            {!! $errors->first('tipo_permiso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>