<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Matérias</title>
</head>
<?php include_once '../cabecalho.php'; ?>

<body>
    <div id="materias">
        <fieldset>
            <form action="../../controller/validacao.php" method="post">
                <h2>Matérias</h2>
                <hr><br>
                <div>
                    <input value="Nome da matéria: " type="text" name="materia" id="nome-materia"><br>
                    <select name="" id="">
                        
                    </select>
                   
                    <input type="submit" value="Enviar dados" class="botao">
                </div>
            </form>
        </fieldset>
    </div>
</body>

</html>