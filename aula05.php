<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula05</title>
</head>
<body>

    <!-- Igual -->

    <?php
       $num1 = 5;
       $num2 = 3; 
       
       if($num1 == $num2){
        echo "true";
       }else{
        echo "false";
       } 
    ?>

    <!-- identico -->

    <?php 
        $num1 = 5;
        $num2 = 3;

        if($num1 === $num2){
            echo "true";
        }else{
            echo "false";
        }
    ?>

    <!-- Não Igual -->
        
    <?php
        $num1 = 5;
        $num2 = 3;

        if($num1 != $num2){
            echo "true";
        }else{
            echo "false";
        }
    ?>

    <!-- Não Identico -->

    <?php
        $num1 = 5;
        $num2 = 3;

        if($num1 !== $num2){
            echo "true";
        }else{
            echo "false";
        }
    ?>

    <!-- Maior que -->

    <?php
        $num1 = 5;
        $num2 = 3;

        if($num1 > $num2){
            echo "true";
        }else{
            echo "false";
        }
    ?>

    <!-- Menor que -->

    <?php
        $num1 = 5;
        $num2 = 3;

        if($num1 < $num2){
            echo "true";
        }else{
            echo "false";
        }
    ?>

    <!-- Maior ou Igual a -->

    <?php
        $num1 = 5;
        $num2 = 3;

        if($num1 >= $num2){
            echo "true";
        }else{
            echo "false";
        }
    ?>

    <?php
        $num1 = 5;
        $num2 = 3;

        if($num1 <= $num2){
            echo "true";
        }else{
            echo "false";
        }
    ?>

    <?php
        $num1 = 2;
        $num2 = 5;
        var_dump($num1 !== $num2)
    ?>

    

</body>
</html>