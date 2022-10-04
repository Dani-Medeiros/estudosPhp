<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <?php

        echo "<h3>Resultados do Formulário:</h3><br><hr>";

        $sexo = $_REQUEST['sexo'];
        $idade = $_REQUEST['idade'];
        
        echo "<br>O sexo é: ".$sexo."<br>";

        /* Analisar a idade do utilizador */

        if($idade == 'menor')
            echo 'O visitante é menor de idade.';
        else
            echo 'O visitante tem autorização para tirar CNH.'


    ?>
</body>
</html>