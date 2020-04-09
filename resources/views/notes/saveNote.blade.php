<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/app.css">
   <!-- <link rel="stylesheet" href="css/styleSaveNote.css"> -->
    <title>Document</title>
</head>
<body>
<div class="container text-center">



<h1>
@if(!isset($note))
 Crear una nota
 @else
 Actualizar nota
 @endif
 </h1>
  <div><!-- url('notas/updateNote/'. $note->id) -->

<form action="{{ !isset($note) ? url('notas/saveNote') : url('notas/updateNote/'. $note->id)}}" method="post">
{{ csrf_field()}}

<input type="text" name="title" placeholder="Titulo de la nota" value="{{isset($note) ? $note->title : ''}}"><br>
<br>
<textarea class="areaDeTexto" name="description" placeholder="Descripción de la nota" cols="30" rows="10" > {{isset($note) ? $note->description : ''}}</textarea><br>


<input class="btn btn-primary" type="submit" value="guardar">
</form></div>
<a class="btn btn-success" href="{{url('/notas')}}">Volver al listado</a>




 




<!-- FIN DE CLASS CONTAINER  -->
</div>


</body>
</html>

