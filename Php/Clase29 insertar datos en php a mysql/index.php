


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar datos</title>
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

        ?>
    </div>


</body>

</html>