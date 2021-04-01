<?php
    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "123";

    //conectando con la base de datos
    $conexion = new mysqli($servidor, $nombreusuario, $password);

    if($conexion -> connect_error){
        die("conexion fallida: ". $conexion ->connect_error);
    }

    echo "Conexion existosa";
?>