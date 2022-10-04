<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aula PHP - 017</title>
</head>
<body>

    <form action="processar.php" method="post" id="formulario">
        <p>Formulálio de Testes</p><br><hr>
        <br>
        <input type="hidden" value="Esta informação não foi apresentada no formulário" name="invisivel">
        <p>Escreva a sua mensagem</p>
        <br>
        <textarea name="textarea" id="textarea" cols="30" rows="6"></textarea>
        <br><br>
        <input type="submit" value="Enviar" id="botao">
    </form>

</body>
</html>