<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Include y require</title>
	<style>
		#container{width: 500px; margin: 150px auto;}
		#footer{background-color: #222; padding: 10px; color: white;}
		#menu{background-color: #eee; padding: 10px;}
	</style>
</head>
<body>
	<!--include y requiere para ser componentes reutilizables-->
	<div id="container">
		<?php
			require("menu.php");//require manda mensaje si hay error y no sale todo el archivo
		?>

	<h3>Contenido Principal</h3>

		<?php
			include("footer.php");//include para mandarme un mensaje en caso de error pero el resto sigue corriendo
		?>
	</div>
</body>
</html>