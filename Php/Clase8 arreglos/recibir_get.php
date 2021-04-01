<?php
    //print_r($_GET);

    $usuario = $_GET['tipo_usuario'];//el tipo_usuario esta en ?tipo_usuario=nuevo&navegador=chrome
    $password = $_GET['navegador'];//el navegador esta en ?tipo_usuario=nuevo&navegador=chrome

    //conectarse a la bd
    //autentificar el usuario

    echo "El usuario es ". $usuario . "<br />";
    echo "El password es ". $password . "<br />";

    //con get ves la informacion directamente

?>