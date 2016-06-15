<?php

namespace App\Http\Controllers;


/*use Illuminate\Http\Request;
use App\Http\Requests;
use App\Articulos;*/

use App\Http\Requests;
use App\Http\Requests\CreateArticuloRequest;
use App\Http\Controllers\Controller;
use App\Articulos;

use Request;



class ArticulosController extends Controller
{
    //
    public function index(){
    	$articulos = Articulos::all();
    	return view('articulos.index',compact('articulos'));
    }

    public function show($id){
    	$articulo =Articulos::find($id);
    	return view('articulos.show',compact('articulo'));
    }

    public function create(){
    	return view('articulos.create');
    }

    
	//Request::all(); Obtengo todos los campos
   /* public function store(){
    	$input= Request::all();
    	Articulos::create($input);
    	return redirect('articulos');
    }*/

//Validacion de los campos del formulario
     public function store(CreateArticuloRequest $request){
    	Articulos::create($request-> all());
    	return redirect('articulos');
    }
    

   /* //con Request::get('titulo') obtengo el campo especifico
    public function store(){
    	$input= Request::get('titulo');
    	return $input;
    }*/

      /*public function store(Request $request){    	    	
    	return $request->input();
    }*/

    public function edit($id){
    	$articulo=Articulos::find($id);
    	return view('articulos.edit',compact('articulo'));
    }

    public function update($id, CreateArticuloRequest $request){
    	$articulo=Articulos::find($id);
    	$articulo->update($request->all());

    	return redirect('articulos');
    }

    public function destroy($id){
    	$articulos=Articulos::find($id);
    	$articulos->delete();

    	return redirect('articulos');
    }
    
}
