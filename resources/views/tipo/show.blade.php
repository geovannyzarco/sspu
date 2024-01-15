@extends('layouts.app')

@section('template_title')
    {{ $tipo->name ?? "{{ __('Show') Tipo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $tipo->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Cant Horas Personales:</strong>
                            {{ $tipo->cant_horas_personales }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
