@extends('layouts.app')

@section('template_title')
    {{ $compesado->name ?? "{{ __('Show') Compesado" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Compesado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compesados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Creacion:</strong>
                            {{ $compesado->fecha_creacion }}
                        </div>
                        <div class="form-group">
                            <strong>Inicio Compensado:</strong>
                            {{ $compesado->inicio_compensado }}
                        </div>
                        <div class="form-group">
                            <strong>Fin Compensado:</strong>
                            {{ $compesado->fin_compensado }}
                        </div>
                        <div class="form-group">
                            <strong>Justificacion:</strong>
                            {{ $compesado->justificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Adjunto:</strong>
                            {{ $compesado->adjunto }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $compesado->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estado Compesado:</strong>
                            {{ $compesado->id_estado_compesado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Empleado:</strong>
                            {{ $compesado->id_empleado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
