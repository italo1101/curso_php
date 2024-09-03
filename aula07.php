<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula07</title>
</head>
<body>
    <?php
        $nome = "Renato";
        switch($nome){
            case "Italo":
                echo "você é o Italo";
            break;
            case "David":
                echo "Você é o David";
            break;   
            case "Marcelo":
                echo "Você é o Marcelo";
            break;
            case "Larissa":
                echo "Você é a Larissa";
            break;
            default:
                echo "Você não é o italo, nem o David, nem o Marcelo e nem Larissa";
        }
    ?>
</body>
</html>