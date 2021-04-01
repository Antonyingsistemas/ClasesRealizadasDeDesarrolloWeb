<!doctype html>
    <head>
        <meta charset="utf-8">
        <title>Arreglos</title>
    </head>
    <style>
        body{
            
            background-color: #E85F79;
            font-family: Arial;
            font-size: 4em;
            padding: 50px;
        }


    </style>
    
    <body>


            <!--simbolo de php-->
            <?php
                $frutas = array ("platano","manzana","uvas","fresa");

                print_r($frutas); // imprime los valores

                echo $frutas[1];//valor especifico

                echo "<br>";

                echo count($frutas) . "elementos<br/>"; // cuantos elementos tiene fruta

                for($i=0; $i < count($frutas);$i++){
                    echo $frutas[$i] . "<br/>";

                }

                $edades = array("Marcos" => 34, "Tania" => 23 , "Omar" => 27); // en ves de llevar del 0 a n , cambias a nombres "Omar" => 27

                print_r($edades);

                echo "<br>";

                echo $edades['Tania'];

                echo "<br>";

                //foreach para arreglos asociativos
                foreach($edades as $key => $value){//edades a llave que se asocia a un valor
                    echo $key . " tiene el valor de " . $value . "<br/>";

                }
            ?>



        
    </body>
</html>