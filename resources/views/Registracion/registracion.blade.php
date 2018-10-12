@extends('home')
@section('title', 'Registracion')
@section('content')
<br><br><br>
<div class="container col-md-8 col-md-offset-2">
    <div class="well well bs-component">
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
        @if (session('estado'))
            <div class="alert alert-success">
                {{ session('estado') }}
            </div>
        @endif    
        <form class="form-horizontal" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <fieldset>
                <legend>Formulario de Registración</legend>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Apellido</label>
                        <input type="text" class="form-control" id="inputApellido" name="inputApellido">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nombre</label>
                        <input type="text" class="form-control" id="inputNombre" name="inputNombre">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>email</label>
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword">
                    </div>
                </div>

                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Obra Social</label>
                    <div class="col-sm-10">
                        <select id="osocial" name='osocial' class="form-control">
                            @foreach($misosociales as $osocial)
                                <option value="{{$osocial->id}}">{{$osocial->nombre}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Domicilio</label>
                    <input type="text" class="form-control" id="inputDomicilio" name="inputDomicilio" placeholder="Av.Belgrano 1450 Piso 4 Dpto. E">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputLocalidad">Localidad</label>
                        <input type="text" class="form-control" id="inputLocalidad" name="inputLocalidad">
                    </div>
                    <div class="form-group col-md-6">
                        <label>C.P.</label>
                        <input type="text" class="form-control" id="inputCP" name="inputCP">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12 text-center">
                        <button class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.js"></script>
@endsection