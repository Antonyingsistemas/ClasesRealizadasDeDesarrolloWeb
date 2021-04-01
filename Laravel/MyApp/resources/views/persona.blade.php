<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
</head>
<body>
    <!--no te olvides es persona.blade.php-->
    <ul>
    @foreach($personas as $persona)
        <li>{{ $persona->nombre }}</li>
    @endforeach
    </ul>
</body>
</html>