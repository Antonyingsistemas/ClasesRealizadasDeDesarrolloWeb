<!doctype html>
    <head>
        <meta charset="utf-8">
        <title>Funciones de string</title>
    </head>

    <body>

    <!--simbolo de php-->
    <?php
        /*funciones de string*/

        $mensaje = "Hoy voy a aprender php :D";

        //longitud (25)
        echo strlen($mensaje)."<br>";

        //Numero de palabras (6)
        echo str_word_count($mensaje);

        echo "<br>";
        //Reversa para leer alreves
        echo strrev($mensaje);

        echo "<br>";
        //Encontrar texto (donde esta la palabra "aprender", esta en 10)
        echo strpos($mensaje, "aprender");

        echo "<br>";
        //reemplazar texto
        echo str_replace("aprender", "nada" , $mensaje);// "busca la palabra","palabra a reemplazar","cadena"

        echo "<br>";
        //convertir a minusculas
        echo strtolower($mensaje);

        echo "<br>";
        //convertir a mayusculas
        echo strtoupper($mensaje);

        echo "<br>";
        //comparar cadenas
        echo strcmp("c","a");//compara el numero de bits, a y b sale -1 (1-2) y c y a sale 2 (3-1)

        echo "<br>";
        //subtraer cadena
        echo substr($mensaje, 10,5); /*extrae desde la posicion 10 hasta la posicion 15*/

        echo "<br>";
        //remover espacios en blanco
        echo trim("           hola     soy     AxpeerD");



    ?>

        
    </body>
</html>