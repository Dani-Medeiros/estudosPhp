<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aula PHP - 018</title>
</head>
<body>

    <form action="processar.php" method="post" id="formulario">
        <p>Formulálio de Testes</p><br><hr>
        <br>
        <p>Países</p>
        <select size="3" name="paises[]" multiple="multiple">
            <option value="Brasil">Brasil</option>
            <option value="Canadá">Canadá</option>
            <option value="Dinamarca">Dinamarca</option>
            <option value="Espanha">Espanha</option>
            <option value="Portugal">Portugal</option>
            <option value="Russia">Rússia</option>

        </select>
        <br><br>
        <input type="submit" value="Enviar" id="botao">
    </form>

</body>
</html>