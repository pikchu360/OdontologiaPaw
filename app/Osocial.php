<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Osocial extends Model
{
    protected $fillable = [
        'id', 
        'nombre',
    ];
    public function registraciones(){
        return $this->hasMany('App\Registracion');
    }
}
