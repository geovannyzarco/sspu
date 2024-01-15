@extends('layouts.app')

@section('template_title')
    {{ $tipoPermiso->name ?? "{{ __('Show') Tipo Permiso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipo Permiso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-permisos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo Permiso:</strong>
                            {{ $tipoPermiso->tipo_permiso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
