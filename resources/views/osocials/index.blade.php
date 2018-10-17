@extends('home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Obras Sociales</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('osociales.create') }}"> Nuevo </a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Nro</th>
            <th>Nombre</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($osociales as $osocial)
        <tr>
            <td>{{ $osocial->id }}</td>
            <td>{{ $osocial->nombre}}</td>
            <td>
                <a class="btn btn-info" href="{{ route('osociales.show',$osocial->id) }}">Ver</a>
                <a class="btn btn-primary" href="{{ route('osociales.edit',$osocial->id) }}">Editar</a>
                {!! Form::open(['method' => 'DELETE','route' => ['osociales.destroy', $osocial->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    {!! $osociales->links() !!}
</div>
@endsection