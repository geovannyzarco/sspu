@extends('layouts.app')

@section('template_title')
    {{ $preferencia->name ?? "{{ __('Show') Preferencia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Preferencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('preferencias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Dependecia:</strong>
                            {{ $preferencia->dependecia }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Jefe:</strong>
                            {{ $preferencia->nombre_jefe }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $preferencia->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $preferencia->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
