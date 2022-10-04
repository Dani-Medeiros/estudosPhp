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

        //Verificar se os dados estão preenchidos

        echo "<h3>Resultados do Formulário:</h3><br><hr>";

        $nome = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
        $foto = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : "";

        if($nome == "" or $foto == "") 
        {
            echo 'Os dados não foram preenchidos corretamente';
            return;
        }


        if ($foto['size'] >=100000) {
            echo 'O arquivo tem o tamanho maior que o permitido<br>
                 (tamanho atual:'.($foto['size']/1000).'kb)';
            return;
        }

        //Upload da fotografia

        move_uploaded_file($foto['tmp_name'], 'assets/'.$foto['name']);



        //Verificar dados da fotografia

        echo '<p>Seja bem-vindo, sr(a). '.$nome.'.</p>';

        echo '<p>Sua foto:</p><img src="assets/'.$foto['name'].'">';
        
    ?>
</body>
</html>