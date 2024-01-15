@extends('layouts.app')

@section('template_title')
    {{ $permiso->name ?? "{{ __('Show') Permiso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Permiso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('permisos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Creacion:</strong>
                            {{ $permiso->fecha_creacion }}
                        </div>
                        <div class="form-group">
                            <strong>Permiso Desde:</strong>
                            {{ $permiso->permiso_desde }}
                        </div>
                        <div class="form-group">
                            <strong>Permiso Hasta:</strong>
                            {{ $permiso->permiso_hasta }}
                        </div>
                        <div class="form-group">
                            <strong>Justificacion:</strong>
                            {{ $permiso->justificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $permiso->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Id Empleado:</strong>
                            {{ $permiso->id_empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo Permiso:</strong>
                            {{ $permiso->id_tipo_permiso }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estado Permiso:</strong>
                            {{ $permiso->id_estado_permiso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
