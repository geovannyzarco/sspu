@extends('layouts.app')

@section('template_title')
    Compesado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Compesado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('compesados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fecha Creacion</th>
										<th>Inicio Compensado</th>
										<th>Fin Compensado</th>
										<th>Justificacion</th>
										<th>Adjunto</th>
										<th>Observaciones</th>
										<th>Id Estado Compesado</th>
										<th>Id Empleado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($compesados as $compesado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $compesado->fecha_creacion }}</td>
											<td>{{ $compesado->inicio_compensado }}</td>
											<td>{{ $compesado->fin_compensado }}</td>
											<td>{{ $compesado->justificacion }}</td>
											<td>{{ $compesado->adjunto }}</td>
											<td>{{ $compesado->observaciones }}</td>
											<td>{{ $compesado->id_estado_compesado }}</td>
											<td>{{ $compesado->id_empleado }}</td>

                                            <td>
                                                <form action="{{ route('compesados.destroy',$compesado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('compesados.show',$compesado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('compesados.edit',$compesado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $compesados->links() !!}
            </div>
        </div>
    </div>
@endsection
