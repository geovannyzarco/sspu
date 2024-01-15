<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $tipo->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_horas_personales') }}
            {{ Form::text('cant_horas_personales', $tipo->cant_horas_personales, ['class' => 'form-control' . ($errors->has('cant_horas_personales') ? ' is-invalid' : ''), 'placeholder' => 'Cant Horas Personales']) }}
            {!! $errors->first('cant_horas_personales', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>