<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    //Definicon de las variables a obtener de un formulario
    protected $fillable=[
    	'titulo',
    	'descripcion',
    	'autor'
    ];
}