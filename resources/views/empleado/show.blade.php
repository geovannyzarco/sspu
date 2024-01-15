@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? "{{ __('Show') Empleado" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $empleado->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empleado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $empleado->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Huella:</strong>
                            {{ $empleado->codigo_huella }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Huella 2:</strong>
                            {{ $empleado->codigo_huella_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo Empleado:</strong>
                            {{ $empleado->id_tipo_empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Horario:</strong>
                            {{ $empleado->id_horario }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cargo:</strong>
                            {{ $empleado->id_cargo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Area:</strong>
                            {{ $empleado->id_area }}
                        </div>
                        <div class="form-group">
                            <strong>Id Categoria:</strong>
                            {{ $empleado->id_categoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
