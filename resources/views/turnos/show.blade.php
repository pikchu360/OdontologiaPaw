@extends('home')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Turno </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('turnos.index') }}">Volver </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id:</strong>
                {{ $turno->id}}
            </div>
            <div class="form-group">
                <strong>Nombre del profesional:</strong>
                {{ $turno->prof_name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hora y Fecha:</strong>
                {{ $turno->fecha_hora}}
            </div>
        </div>
    </div>
@endsection
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.js"></script>