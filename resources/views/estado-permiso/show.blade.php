@extends('layouts.app')

@section('template_title')
    {{ $estadoPermiso->name ?? "{{ __('Show') Estado Permiso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Estado Permiso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estado-permisos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $estadoPermiso->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
