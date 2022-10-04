<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aula PHP - 015</title>
</head>
<body>
    <form action="processar.php" method="post" id="formulario">
        <p>Formulálio de Testes</p><br><hr>
        <br><br>
        <p>Indique o seu sexo:</p>
        <br>
        <!-- Masculino -->
        <input type="radio" name="sexo" id="masculino" value="Masculino">
        <label for="masculino">Masculino</label>
        <br>
        <!-- Feminino -->
        <input type="radio" name="sexo" id="feminino" value="Feminino">
        <label for="feminino">Feminino</label>
        <br><br>
        <p>Faixa etária:</p>
        <br>
        <input type="radio" name="idade" value="menor" id="menor">
        <label for="menor">Menor que 18 anos.</label>
        <br>
        <input type="radio" name="idade" value="maior" id="maior">
        <label for="maior">Maior que 18 anos.</label>
        <br><br>
        <input type="submit" value="Enviar" id="botao">

    </form>
</body>
</html>