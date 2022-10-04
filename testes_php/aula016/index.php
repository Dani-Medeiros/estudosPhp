<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aula PHP - 016</title>
</head>
<body>

    <form action="processar.php" method="post" id="formulario">
        <p>Formulálio de Testes</p><br><hr>
        <br>
        <p>Destino de Férias Preferido:</p><br>
        <select name="destino">

            <option value="Canadá">Canadá</option>
            <option value="Portugal">Portugal</option>
            <option value="Havaí">Havaí</option>
            <option value="Califórnia">Califórnia</option>

        </select>
        <br><br>
        <input type="submit" value="Enviar" id="botao">
    </form>

</body>
</html>