<?php
    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "antony120antony12";
    $db = "todolistDB";//que tabla usaremos

    //conectando con la base de datos
    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

    //comprobar si hay error, si lo hay dar mensaje
    if($conexion -> connect_error){
        die("conexion fallida: ". $conexion ->connect_error);
    }


    //PARA CREAR BASE DE DATOS
    //identificar sentencia
    /*$sql = "CREATE DATABASE todolistDB";//creando tabla

    if($conexion->query($sql) === true){//validar que sea true y 0

        echo "Base de datos creada correctamente";

    }else{
        die("Error al crear base de datos: " . $conexion->error);
    }*/


    //creando la tabla
    $sql = "CREATE TABLE todoTable(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        texto VARCHAR(30) NOT NULL,
        completado BOOLEAN NOT NULL,
        timestamp TIMESTAMP

    )";

    if($conexion->query($sql) === true){
        echo "La tabla se creo correctamente...";
    }else{
        die("Error al crear tabla: " . $conexion->error);
    }

?>
