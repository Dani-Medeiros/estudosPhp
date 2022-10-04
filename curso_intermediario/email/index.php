<?php
    $mensagem = 0;
    @$mensagem = $_REQUEST['mensagem'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php 
    
    if($mensagem =="enviado") {
        echo "<h1>Mensagem enviada, agradecemos seu contato!</h1>";
    }
     else {
        }

    ?>

    <fieldset>
        <legend>
            <h3>Formulário de Contato</h3>
        </legend>
        <form action="processaForm.php" method="post">
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" id="nome" required><br>

            <label for="telefone">Telefone</label><br>
            <input type="tel" name="telefone" id="telefone" required><br>

            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required><br>

            <label for="assunto">Mensagem</label><br>
            <textarea name="assunto" id="assunto"></textarea><br>

            <input type="submit">

        </form>
    </fieldset>
</body>
</html>