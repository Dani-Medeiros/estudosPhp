<?php include_once __DIR__ . '../../../controller/turmas.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Editar Turmas</title>
</head>
<?php include_once '../cabecalho.php'; ?>

<body>
    <div id="turmas">
        <fieldset>
            <form action="../../controller/validacao_turmas.php" method="POST">
                <h2>Turmas</h2>
                <hr><br>
                <div>
                    <input type="text" hidden name="acao-edit" id="acao-edit" value="editar">
                    <input type="text" hidden name="acao-del" id="acao-del" value="deletar">
                    ID:<br>
                    <input type="text" name="id" id="id-turma" class="botao"><br>
                    Turma: <br>
                    <input type="text" name="turma" id="nome-turma" class="botao"><br>
                    Matéria: <br>
                    <select name="materia" id="materia" class="botao">
                        <?php
                        lista_materias();
                        ?>
                    </select>
                    <br>
                    <a href="./cadastrar.php"><input type="submit" value="ATUALIZAR TURMA" class="botao"></a>
                    <a href="./lista.php"><input type="button" value="LISTA DAS TURMAS" class="botao"></a>
                </div>
            </form>
        </fieldset>
</body>

</html>