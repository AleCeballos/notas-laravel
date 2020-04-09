<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/styleIndex.css">
    <title>Document</title>
</head>
<body>

<div class="container text-center">
                <h1> Aplicación de notas</h1>

<a class="btn btn-primary text-right " href="{{url('/notas/saveNote')}}"> Crear notas</a>

@if(session('status'))

<div class="alert alert-success" role="alert">
{{session('status')}}
</div>
<br> <br>
@endif

<h3>Listado de notas: </h3>



@foreach($notes as $note)


<div class="row tarjeta " >
             <div class="col-sm-6 col-md-4 ">
               <div class="thumbnail  ">
      
                  <div class="caption btn-group">
                       <h3>{{$note->title}}</h3>
                       <h4>{{$note->created_at}}</h4>
                         <p>{{ $note->description}}</p>
       
                          <div class="btn-group btn-group-justified" role="group" >
                         
                            <!-- BOTON 1 -->
                               <div class="btn-group" role="group">
                                   <a  href="{{url('/notas/note/'. $note->id)}}" class="btn btn-primary"  role="button">Ver Nota</a>
                                </div>
                                 <!-- BOTON 2 -->
                                  <div class="btn-group" role="group">
                                  <a href="{{url('/notas/deleteNote/'. $note->id)}}" class="btn btn-danger" role="button"> Borrar Nota</a>
                                  </div>
                                   <!-- BOTON 2 -->
                                    <div class="btn-group" role="group">
                                    <a href="{{url('/notas/updateNote/'. $note->id)}}" class="btn btn-warning" role="button">Editar Nota</a>
                                  </div>
                         
                         
                       
                </div>
           </div>
       </div>
   </div>
</div>


@endforeach

</div>
</body>
</html>

