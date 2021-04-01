<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validar formulario - Listasrroja</title>
	<style>
		body{background-color: #264673; box-sizing: border-box; font-family: Arial;}

		form{
			background-color: white;
			padding: 10px;
			margin: 100px auto;
			width: 400px;
		}

		input[type=text], input[type=password]{
			padding: 10px;
			width: 380px;
		}
		input[type="submit"]{
			border: 0;
			background-color: #ED8824;
			padding: 10px 20px;
		}

		.error{
			background-color: #FF9185;
			font-size: 12px;
			padding: 10px;
		}
		.correcto{
			background-color: #A0DEA7;
			font-size: 12px;
			padding: 10px;
		}
	</style>
</head>

<body>
	<form action="#" method="POST">
		<?php

			//PARA QUE NO VUELVAS A REPETIR LOS DATOS 
			$nombre = "";
			$password = "";
			$email = "";
			// TODO (1) declarar variable
			$pais = "";
			
            //solicitud de post
			if(isset($_POST['nombre'])){//iseet funcion para validacion si existe un post


				$nombre = $_POST['nombre'];
				$password = $_POST['password'];
				$email = $_POST['email'];


				// TODO (2) asignar valor de solicitud POST
				$pais = $_POST['pais'];


                //array para campos
				$campos = array();

                //si nombre es igual a nada, muestra los siguiente mensajes
				if($nombre == ""){
					array_push($campos, "El campo Nombre no pude estar vacío");
				}

                //si password es igual a nada, muestra los siguiente mensajes
				if($password == "" || strlen($password) < 6){ // strlen(password) validando la longitud
					array_push($campos, "El campo Password no puede estar vacío, ni tener menos de 6 caracteres.");
				}

                //si email es igual a nada, muestra los siguiente mensajes
				if($email == "" || strpos($email, "@") === false){ //validando que tenga una arroba
					array_push($campos, "Ingresa un correo electrónico válido.");
				}

				// TODO (3) Validar que el campo no esté vacío
				if($pais == ""){
					array_push($campos, "Selecciona un país de origen.");
				}

                //si hay un error entonces 
				if(count($campos) > 0){
					echo "<div class='error'>";//mensaje de error

                    //imprime todos los mensajes de los errores
					for($i = 0; $i < count($campos); $i++){
						echo "<li>".$campos[$i]."</i>";
					}
				}else{
					echo "<div class='correcto'> 
							Datos correctos";//correcto
				}
				echo "</div>";
			}
		?>
		<p>
		Nombre:<br/>
		<input type="text" name="nombre" value="<?php echo $nombre; ?>"><!--Para que el valor ingresado no se vuelva vacio-->
		</p>

		<p>
		Password:<br/>
		<input type="password" name="password" value="<?php echo $password; ?>">
		</p>

		<p>
		correo electrónico:<br/>
		<input type="text" name="email" value="<?php echo $email; ?>">
		</p>

		<p>
		<!--listas-->
			País de origen: <br>	
			<select name="pais" id="">
				<option value="">Selecciona un país</option>
				<option value="mx" <?php if($pais == "mx") echo "selected" ?> >México</option><!--seleccionando "selected" para que valide-->
				<option value="eu" <?php if($pais == "eu") echo "selected" ?>>Estados Unidos</option>
				<option value="es" <?php if($pais == "es") echo "selected" ?>>España</option>
				<option value="ar" <?php if($pais == "ar") echo "selected" ?>>argentina</option>
				<option value="ch" <?php if($pais == "ch") echo "selected" ?>>China</option>
			</select>
		</p>

	

		<p><input type="submit" value="enviar datos"></p> 
	</form>
</body>
</html>