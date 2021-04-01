<!doctype html>
    <head>
        <meta charset="utf-8">
        <title>Condicionales</title>
    </head>
    <style>
        body{
            text-align:center;
            background-color: #E85F79;
        }


    </style>
    
    <body>


            <!--simbolo de php-->
            <?php
            for($i=0;$i<2;$i++){
            ?>
            <img src="axpeerd.jpg" alt="">
            <br>
            <?php
                
            }
            ?>
            <!--Con While-->
            <?php
            while(rand(1,10) != 5){ //rand(1,10) es random
            ?>
            <br>
            <img src="axpeerd.jpg" alt="">

            <?php
            }
            ?>



        
    </body>
</html>