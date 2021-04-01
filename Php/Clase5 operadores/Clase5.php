<!doctype html>
    <head>
        <meta charset="utf-8">
        <title>Condicionales</title>
    </head>
    <style>
        body{
            font-family: Arial;
            background: #BDE85F;

        }
        div{
            background: white;
            padding: 20px;
            margin: 0 auto;
            width: 200px;
        }
        h1{
            font-size: 36px;
        }
    </style>
    
    <body>
        <div>
            <!--simbolo de php-->
            <?php
                $hora = 20;
                if($hora > 6 && $hora < 12){
                    echo "<h1>Hola! buenos dias</h1>";
                }else if ($hora >= 12 && $hora <= 18){
                    echo "<h1>Hola! buenos tardes</h1>";
                }else
                {
                    echo "<h1>Hola! buenos noches</h1>";
                }

            ?>

        </div>



        
    </body>
</html>