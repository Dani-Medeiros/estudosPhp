<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Calcula Idade</title>
</head>
<body>
    
    <form action="verifica_idade.php" method="post">
        <h2>Formulário</h2><hr>
        <br>
        <h4>Informe sua data de nascimento para<br>realizar o cálculo da sua idade atual.</h4>
        <p>Data de Nascimento:</p>
        <input type="date" name="nasc" id="nasc" required>
        <br><br>
        <input type="submit" value="Verificar" id="botao">
    </form>
    
</body>
</html>