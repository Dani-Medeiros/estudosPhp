<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Matérias</title>
</head>
<?php include_once '../'; ?>
<body>
    <div id="materias">
        <fieldset>
            <form action="../../controller/validacao_materia.php" method="POST">
                <h2>Matérias</h2>
                <hr><br>
                <div>
                    Nome da matéria: <br>
                    <input type="text" name="materia" id="nome-materia" class="botao"><br>
                    Professor: <br>
                    <select name="professor" id="professor" class="botao">
                        <?php
                        lista_professores();
                        ?>
                    </select>
                    <br>
                    <a href="./cadastrar.php"><input type="submit" value="CADASTRAR MATÉRIA" class="botao"></a>
                    <a href="./lista.php"><input type="button" value="LISTA DE MATÉRIAS" class="botao"></a>
                </div>
            </form>
        </fieldset>
</body>

</html>