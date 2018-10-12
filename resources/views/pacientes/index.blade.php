@extends('home')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Pacientes</h2>
            </div>
            <div class="pull-right">
                <a   class="btn   btn-success" href="{{ route('pacientes.create') }}"> Nuevo </a>
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
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Email</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($pacientes as $paciente)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $paciente->apellido }}</td>
            <td>{{ $paciente->nombre}}</td>
            <td>{{ $paciente->email}}</td>
            <td>
                <a class="btn btn-info" href="{{ route('pacientes.show',$paciente->id) }}">Ver</a>
                <a class="btn btn-primary" href="{{ route('pacientes.edit',$paciente->id) }}">Editar</a>
                {!! Form::open(['method' => 'DELETE','route' => ['pacientes.destroy', $paciente->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    {!! $pacientes->links() !!}
@endsection
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.js"></script>