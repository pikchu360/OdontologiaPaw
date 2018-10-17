@extends('home')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Paciente</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pacientes.index') }}">Volver </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellido:</strong>
                {{ $paciente->apellido}}
            </div>
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $paciente->nombre}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $paciente->email}}
            </div>
        </div>
    </div>
@endsection