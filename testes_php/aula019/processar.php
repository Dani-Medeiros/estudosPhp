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

        
        $arquivos = $_FILES['arquivos'];

        echo 'Nome do arquivo: '.$arquivos['name'].'<br>';
        echo 'Tamanho do arquivo: '.$arquivos['size'].'<br>';
        echo 'Tipo do arquivo: '.$arquivos['type'].'<br>';
        echo 'Nome temporário do arquivo: '.$arquivos['tmp_name'].'<br>';
        echo 'Código de erro: '.$arquivos['error'].'<br><br>';

        
        move_uploaded_file($arquivos['tmp_name'], $arquivos['name']);
        
        
            if($arquivos['error'] ==0 ) 
            {
                echo 'O arquivo foi importado com sucesso';
            } 
            else
            {
                echo 'Houve um erro ao enviar o arquivo (ERRO'.$arquivos['error'].')';
            }
    ?>
</body>
</html>