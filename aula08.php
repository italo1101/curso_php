 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula08 - parte01</title>
 </head>
 <body>
    <?php
        $instrumentos = array("Violão", "bateria", "Flauta");
        echo "Eu tenho um: " . $instrumentos[0] . "!";
    ?>

    <?php
        $instrumentos = array("Violão", "Bateria", "Flauta");
        echo count($instrumentos);
        $elementos = count($instrumentos);
        
        for($x = 0; $x < $elementos; $x++){
            echo "<br>";
            echo $instrumentos[$x];
            echo "<br>";
        }
    ?>

 </body>
 </html>