<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PaginasController extends Controller
{
    //

    public function acerca ()
    {    
    	//FORMAS DE ENVIAR VARIABLELS A LA VISTA MEDIIANTE EL CONTROLADOR
      $nombre='Rogelio';
      $apellido='Morales Gálvez';

      $apoyo=[
      	'Rogelio','Juan','Karla'
      ];

    /*
    3) $datos=[];
    3) $datos['nombre']='Rogelio';
    3) $datos['apellido']='Morales Gálvez';	*/

    	//1) $name='Rogelio Morales';
    	//1) return view('acerca')->with('nombre',$name);
    	
    	/*2) return view('acerca')->with([
    	  2)	'nombre'=>'Rogelio',
    	  2)	'apellido'=>'Morales'
    	  2) ]);*/

    	//3) return view('acerca',$datos);
    	  return view('acerca',compact('apoyo'));
    }
}
