<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registracion extends Model
{
    protected $fillable = ['apellido', 'nombre', 'email', 'password', 'domicilio', 'localidad', 'cp', 'slug', 'estado', 'user_id', 'osocial_id'];

    public function Osocial(){
        return $this->belongsTo('App\Osocial');
    }
}
