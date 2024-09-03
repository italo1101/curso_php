<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idade = 18;

        if($idade >= 18){
            echo "Você pode se alistar.";
        }else{
            echo "Infelizmente você não tem idade.";
        }
    ?>

    <?php
        $idade = 16;

        if($idade >= 18){
            echo "Você pode se alistar.";
        }elseif($idade <= 18 && $idade >= 16){
            echo "Você tem condições de entrar na fila de espera.";
        }else{
            echo "infelizmente você não tem idade.";
        }
    ?>
</body>
</html>