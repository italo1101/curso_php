<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula09</title>
</head>
<body>

    <!-- Associative Array -->

    <?php
        $idade = array("Anderson" => "18", "Neri" => "20", "Giulia" => "20");
        echo "Anderson tem: " . $idade['Anderson'] . " anos!"; 
        echo "<br>";

        foreach($idade as $name => $name_value){
            echo "Nome=" . $name . ", Idade = " . $name_value;
            echo "<br>";
        }
    ?>
</body>
</html>