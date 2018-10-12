@extends('home')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Turnos</h2>
            </div>
            <div class="pull-right">
                <a   class="btn   btn-success" href="{{ route('turnos.create') }}"> Nuevo </a>
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
            <th>Nombre del Profesional</th>
            <th>Fecha y Hora</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($turnos as $turno)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $turno->prof_name }}</td>
            <td>{{ $turno->fecha_hora }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('turnos.show',$turno->id) }}">Ver</a>
                <a class="btn btn-primary" href="{{ route('turnos.edit',$turno->id) }}">Editar</a>
                {!! Form::open(['method' => 'DELETE','route' => ['turnos.destroy', $turno->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    {!! $turnos->links() !!}
@endsection
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.js"></script>