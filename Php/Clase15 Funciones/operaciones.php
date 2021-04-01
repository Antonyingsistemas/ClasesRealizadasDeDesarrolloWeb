<!--vinculado por include-->
<?php

function multiplicar($n1, $n2){//funcion multiplicar 
	return $n1 * $n2;
}

//validar si los numeros son numericos
function esNumero($n1, $n2){
	if(is_numeric($n1) && is_numeric($n2)){//is_numeric es numerico?
		return true;
	}else{
		return false;
	}
}

//mensaje de error
function mostrarError(){
	echo "<span class='error'>Ingresa solo números</span>";
}

//validar todas las operaciones
function validarCampos(){
	if(isset($_POST['numero01']) && isset($_POST['numero02'])){//isset para verificar la variable
		$n1 = $_POST['numero01'];
		$n2 = $_POST['numero02'];

		if(esNumero($n1, $n2)){
			echo multiplicar($n1, $n2);
		}else{
			mostrarError();
		}
	}
}






?>