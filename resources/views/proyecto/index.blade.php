@extends('layouts.app')

@section('template_title')
    Proyecto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proyecto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Proyecto') }}
                                </a>
                                <a href="{{ route('proyectos.pdf') }}" class="btn btn-success btn-sm float-right"  data-placement="left" target="_blank">
                                    {{ __('Reporte PDF') }}
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
                                        <th>#</th>
                                        
										<th>Nombre Proyecto</th>
										<th>Fuente Fondos</th>
										<th>Monto Planificado</th>
										<th>Monto Fatrocinado</th>
										<th>Monto Fondos Propios</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyectos as $proyecto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $proyecto->NombreProyecto }}</td>
											<td>{{ $proyecto->fuenteFondos }}</td>
											<td>${{ $proyecto->MontoPlanificado }}</td>
											<td>${{ $proyecto->MontoPatrocinado }}</td>
											<td>${{ $proyecto->MontoFondosPropios }}</td>

                                            <td>
                                                <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proyectos.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('proyectos.edit',$proyecto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proyectos->links() !!}
            </div>
        </div>
    </div>
@endsection