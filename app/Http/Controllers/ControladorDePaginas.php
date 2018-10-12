<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorDePaginas extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function home(){
        return view('home');
    }

    public function abrir($slug){
        if($slug == 'registracion'){
            return \Redirect::route('/registracion');
        }else{
            return view($slug);
        }
    }
}
