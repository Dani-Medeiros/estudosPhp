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

        $paises = isset($_REQUEST['paises']) ? $_REQUEST['paises'] : " ";

        if(count($paises) == 0) 
        {
            echo $paises;
        } 
        else 
        {
            echo 'Os países selecionaos foram: <br>';

            for($i = 0; $i < count($paises); $i++) {
                echo $paises[$i].'<br>';
            }
        }

    ?>
</body>
</html>