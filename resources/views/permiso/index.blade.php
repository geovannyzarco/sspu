@extends('layouts.app')

@section('template_title')
    Permiso
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Permiso') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('permisos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Permiso Desde</th>
										<th>Permiso Hasta</th>
										<th>Justificacion</th>
										<th>Observaciones</th>
										<th>Id Empleado</th>
										<th>Id Tipo Permiso</th>
										<th>Id Estado Permiso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permisos as $permiso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $permiso->fecha_creacion }}</td>
											<td>{{ $permiso->permiso_desde }}</td>
											<td>{{ $permiso->permiso_hasta }}</td>
											<td>{{ $permiso->justificacion }}</td>
											<td>{{ $permiso->observaciones }}</td>
											<td>{{ $permiso->id_empleado }}</td>
											<td>{{ $permiso->id_tipo_permiso }}</td>
											<td>{{ $permiso->id_estado_permiso }}</td>

                                            <td>
                                                <form action="{{ route('permisos.destroy',$permiso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('permisos.show',$permiso->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('permisos.edit',$permiso->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $permisos->links() !!}
            </div>
        </div>
    </div>
@endsection
