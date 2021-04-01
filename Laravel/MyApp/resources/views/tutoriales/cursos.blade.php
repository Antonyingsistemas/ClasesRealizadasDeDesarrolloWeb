<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTA ES LA VISTA CON LARAVEL</title>
</head>
<body>
    <h1>Cursos</h1>
    <ul>
    <!--Plantillas de blade-->
    <!--al poner blade ya no se pone php sino>-->
    @foreach($datos as $value) <!--@ directiva de foreach-->
        <li>{{$value}}</li><!--elementos de la lista en la pantalla-->
    @endforeach
    </ul>

    <!--directivas-->
    @if($datos['curso3'] == 'javascript')
        Mi curso favortito es javascript
    @elseif($datos['curso3'] == 'Java')
        Mi curso favortito es Java
    @else
        No encuentro mi curso favorito
    @endif


</body>
</html>