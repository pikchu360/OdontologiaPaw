@extends('home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Evento </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tasks.index') }}">Volver </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                {{ $task->name }}
            </div>
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $task->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha:</strong>
                {{ $task->task_date }}
            </div>
        </div>
        <div class="">
            <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['tasks.destroy', $task->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection