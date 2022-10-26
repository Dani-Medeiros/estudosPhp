<?php include_once __DIR__ . '../../../controller/materias.php'; ?>
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
            <form action="../../controller/validacao_materia.php" method="POST">
                <h2>Matérias</h2>
                <hr><br>
                <div>
                    Nome da matéria: <br>
                    <input type="text" name="materia" id="nome-materia"><br>
                    Professor: <br>
                    <select name="professor" id="professor">
                        <?php
                        lista_professores();
                        ?>
                    </select>
                    <br>
                    <input type="submit" value="CADASTRAR" class="botao">
                </div>
            </form>
        </fieldset>
    </div>
</body>

</html>