<?php

require_once 'ajudantes.php';

$ajudantes = new Ajudantes;

//$data_nasc = explode('/', data_nasc_form());

function data_nasc_form()
{
    $data_nasc = $_POST['nasc'];

    return $data_nasc;
}

function calculaIdade($nascimento) 
{
    $ajudantes = new Ajudantes;

    $nasc = $ajudantes->formatarData($nascimento, 'd/m/Y');

    $data_nasc = explode('/', $nasc);

    $data_atual = $ajudantes->dataAtual();

    $idade = $data_atual[1]["ano"] - $data_nasc[2];

    if($data_atual[1]["mes"] <= $data_nasc[1] && $data_atual[1]["dia"] < $data_nasc[0]) {
        $idade -=1;
    }

    return $idade;
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Resultado Calculo</title>
</head>
<body>
    <h2>Cálculo idade</h2><hr>
    <br><br>
    <?php echo '<h3>Você está com '.calculaIdade(data_nasc_form()).' anos.</h3>' ?>
</body>
</html>