


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Obtener datos</title>
</head>
<body>
    <!--formulario-->
    <form action="index.php" method="POST">

        <!--caja de texto-->
        <input type="text" name="texto" id="texto">
        
        <!--boton-->
        <input type="submit" value="Añadir pendiente">

    </form>

    <!--capa-->
    <div id="todolist">
        <?php
        //conectar a la bd
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

        //validar y insertando datos
        if(isset($_POST['texto'])){//isset , si existe la variable post llamada texto

            //imaginemos que el usuario puso submit
            $texto = $_POST['texto'];

            //echo $texto;//para comprobar

            //sentencia
            $sql = "INSERT INTO todoTable(texto, completado) 
                    VALUES ('$texto', false)";

            if($conexion->query($sql) === true){

                echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';//añadiendo texto

            }else{
                die("Error al inserar datos: ". $conexion -> error);
            }

        }

        //mostrar datos
        $sql = "SELECT * FROM todoTable";

        //ejecutar
        $resultado = $conexion->query($sql);

        if($resultado->num_rows > 0 ){//verifica si el numero de filas, si tiene 0 es que esta mal o no hay consultas
            //echo $resultado->num_rows;//en ese momento tenia 5
            while($row = $resultado->fetch_assoc()){//obtener todo el volcado de elementos dentro de resultado
                //var_dump($row);//para datos

                echo '<div><form action=""><input type="checkbox">'.$row['texto'].'</form></div>';//añadiendo datos


            }
        
        }

        $conexion->close();//para cerrar la conexion muy importante OJO


        ?>
    </div>


</body>

</html>