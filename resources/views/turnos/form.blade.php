<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre del Profecional:</strong>
            {!! Form::text('prof_name', null, array('placeholder'=>'Nombre del Profecional','class'=>'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fecha y Hora:</strong>
            {!! Form::date('fecha_hora', null, array('placeholder'=>'','class'=>'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>