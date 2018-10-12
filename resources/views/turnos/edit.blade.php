@extends('layouts.layout')
@section('content')
<br><br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Turno</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('turnos.index') }}">Volver</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($turno,['method'=>'PATCH','route'=>['turnos.update', $turno->id]]) !!}
        @include('turnos.form')
    {!! Form::close() !!}
@endsection