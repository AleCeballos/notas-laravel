<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
<h1> {{$note->title}}</h1>
<p>{{$note->description}}</p>
<a href="{{url('/notas')}}">Volver al listado</a>



</body>
</html>

