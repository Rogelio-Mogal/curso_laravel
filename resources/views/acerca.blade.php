<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Acerca</title>
<meta charset="utf-8" />

</head>
 
<body>
    <header>
       <h1>Mi sitio web creado en html5</h1>
    </header>
    <section>
       <article>
       @if (count($apoyo))
           <h1>Obteniendo arreglo del controlador<h1>
           <ul>
              @foreach($apoyo as $persona)
               <li>{{$persona}}</li>
               @endforeach
           </ul>
         @endif  
       </article>
    </section>
    <aside>
       <h3>Titulo de contenido</h3>
           <p>contenido</p>
    </aside>
    <footer>
        Creado por mi el 2016
    </footer>
</body>
</html>