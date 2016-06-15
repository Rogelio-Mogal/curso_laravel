@extends('layouts/master2')

@section ('contenido')

    <script>

    function captura()

    {

        // obtenemos e valor por el numero de elemento

        //var porElementos=document.forms["form1"].elements[0].value;

        // Obtenemos el valor por el id

        var porId=document.getElementById("autor").value;

        // Obtenemos el valor por el Nombre

        //var porNombre=document.getElementsByName("nombre")[0].value;

        // Obtenemos el valor por el tipo de tag

        //var porTagName=document.getElementsByTagName("input")[0].value;

        // Obtenemos el valor por el nombre de la clase

       // var porClassName=document.getElementsByClassName("formulario")[0].value;

 //document.write("La suma de las variables i + j da: " + porId );

        document.getElementById("resultado").innerHTML=" \
            <br>Por ID: "+porId
            ;

    }

    </script>

<h1>{{trans('app.CrearArticulo')}}</h1>

{!! Form::open(['url'=>'articulos', 'name'=>'myForm'])!!}

<div class="form-group">
	{!! Form::label('titulo','Titulo') !!}
	{!! Form::text('titulo',null,[
	'class'=>'form-control',
	'id'=>'titulo']) !!}
</div>

<div class="form-group">
	{!! Form::label('descripcion','Descripcion') !!}
	{!! Form::textarea('descripcion',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('autor','Autor') !!}
	{!! Form::text('autor',null,['class'=>'form-control', 'onchange'=>'captura()']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Agregar Articulo',['class'=>'btn btn-primary form-control']) !!}	
</div>


{!!Form::close()!!}

@if($errors->any())
	<ul class="alert alert-damage">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
	
@endif


<div id="resultado"></div>


@stop