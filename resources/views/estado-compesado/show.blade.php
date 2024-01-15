@extends('layouts.app')

@section('template_title')
    {{ $estadoCompesado->name ?? "{{ __('Show') Estado Compesado" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Estado Compesado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estado-compesados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $estadoCompesado->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
