<!doctype html>
    <head>
        <meta charset="utf-8">
        <title>Operadores</title>
    </head>

    <body>

    <!--simbolo de php-->
    <?php
        //suma

        $x = 5;
        $y = 10;

        echo $x + $y;
        echo "<br />";

        echo $x - $y;
        echo "<br />";

        echo $x * $y;
        echo "<br />";

        echo $x / $y;
        echo "<br />";

        echo $x % $y;//modulo residuo de la division
        echo "<br />";

        echo $x ** $y;//exponente
        echo "<br />";

        //operaciones de axinacion
        $x -= $y; // $x = $x - $y;
        echo $x;
        echo "<br />";

        //operaciones de comparacion
        var_dump($x == $y); //false o true, recuerda con el === var_dump($x === $y); , < <= >= > <>(diferentes) !=(no es igual)
        echo "<br />";

        echo $x++;
        echo $x;

    ?>

        
    </body>
</html>