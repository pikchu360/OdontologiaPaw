<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\RegistracionFormRequest;
use App\Osocial;
use App\Registracion;

class ControladorDeRegistraciones extends Controller
{
    public function nuevo(){
        $misosociales = Osocial::all();
        return view('Registracion.registracion', compact('misosociales'));
    }
    public function guardar(RegistracionFormRequest $request){
        $slug = uniqid();
        $registracion = new Registracion(array(
            'apellido' => $request->get('inputApellido'),
            'nombre' => $request->get('inputNombre'),
            'email' => $request->get('inputEmail'),
            'password' => $request->get('inputPassword'),
            'domicilio' => $request->get('inputDomicilio'),
            'localidad' => $request->get('inputLocalidad'),
            'cp' => $request->get('inputCp'),
            'slug' => $slug,
            'osocial_id' => $request->get('osocial')
        ));
        $registracion->save();
        return redirect('/registracion')->with('estado', 'Se creo la Registracion con id: '.$slug);
    }
}
