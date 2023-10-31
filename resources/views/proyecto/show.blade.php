@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? "{{ __('Show') Proyecto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectos.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Proyecto:</strong>
                            {{ $proyecto->NombreProyecto }}
                        </div>
                        <div class="form-group">
                            <strong>Fuente Fondos:</strong>
                            {{ $proyecto->fuenteFondos }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Planificado:</strong>
                            ${{ $proyecto->MontoPlanificado }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Patrocinado:</strong>
                            ${{ $proyecto->MontoPatrocinado }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Fondos Propios:</strong>
                            ${{$proyecto->MontoFondosPropios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
