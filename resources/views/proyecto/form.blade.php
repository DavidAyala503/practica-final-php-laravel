<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Proyecto:') }}
            {{ Form::text('NombreProyecto', $proyecto->NombreProyecto, ['class' => 'form-control' . ($errors->has('NombreProyecto') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el nombre del proyecto.']) }}
            {!! $errors->first('NombreProyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Fuente Fondos:') }}
            {{ Form::text('fuenteFondos', $proyecto->fuenteFondos, ['class' => 'form-control' . ($errors->has('fuenteFondos') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese la fuente del proyecto.']) }}
            {!! $errors->first('fuenteFondos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Monto Planificado:') }}
            {{ Form::number('MontoPlanificado', $proyecto->MontoPlanificado, ['class' => 'form-control' . ($errors->has('MontoPlanificado') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el monto planificado para su proyecto.']) }}
            {!! $errors->first('MontoPlanificado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Monto Patrocinado') }}
            {{ Form::number('MontoPatrocinado', $proyecto->MontoPatrocinado, ['class' => 'form-control' . ($errors->has('MontoPatrocinado') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el monto patrocinando para su proyecto.']) }}
            {!! $errors->first('MontoPatrocinado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Monto Fondos Propios:') }}
            {{ Form::number('MontoFondosPropios', $proyecto->MontoFondosPropios, ['class' => 'form-control' . ($errors->has('MontoFondosPropios') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el monto de fondos propios para su proyecto.']) }}
            {!! $errors->first('MontoFondosPropios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>