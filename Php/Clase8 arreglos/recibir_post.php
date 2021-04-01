<?php

    //print_r($_POST['password']);
    
    //obtener los datos
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //conectarse a la bd
    //autentificar el usuario

    //mostrar datos
    echo "El usuario es ". $usuario . "<br />";
    echo "El password es ". $password . "<br />";

    //con post no ves la informacion, esta oculta
?>