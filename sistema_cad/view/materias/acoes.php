<?php include_once __DIR__ . '../../../controller/materias.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Editar Matérias</title>
</head>
<?php include_once '../cabecalho.php'; ?>

<body>
    <div id="materias">
        <fieldset>
            <form action="../../controller/validacao_materia.php" method="POST">
                <h2>Matérias</h2>
                <hr><br>
                <div>
                    <input type="text" hidden name="acao-edit" id="acao-edit" value="editar">
                    <input type="text" hidden name="acao-del" id="acao-del" value="deletar">
                    ID:<br>
                    <input type="text" name="id" id="id-materia" class="botao"><br>
                    Nome da matéria: <br>
                    <input type="text" name="materia" id="nome-materia" class="botao"><br>
                    Professor: <br>
                    <select name="professor" id="professor" class="botao">
                        <?php
                        lista_professores();
                        ?>
                    </select>
                    <br>
                    <a href="./cadastrar.php"><input type="submit" value="ATUALIZAR MATÉRIA" class="botao"></a>
                    <a href="./lista.php"><input type="button" value="LISTA DE MATÉRIAS" class="botao"></a>
                </div>
            </form>
        </fieldset>
</body>

</html>