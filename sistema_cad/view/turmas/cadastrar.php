<?php require_once __DIR__ . '../../../controller/turmas.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Turmas</title>
</head>
<?php include_once '../cabecalho.php' ?>

<body>
    <div id="turmas">
        <fieldset>
            <form action="../../controller/validacao_turmas.php" method="post">
                <h2>Turmas</h2>
                <hr><br>
                Turma: <br>
                <input type="text" name="turma" id="turma">
                Turno: <br>
                <select name="turno" id="">
                    <option name="turno" value="manha">Manhã</option>
                    <option name="turno" value="tarde">Tarde</option>
                    <option name="turno" value="noite">Noite</option>
                </select>
                Matéria: <br>
                <select name="nome_materia" id="materia">
                    <?php lista_materias(); ?>
                </select>
                <a href="/estudos_php/sistema_cad/controller/turmas.php"><input type="submit" value="CADASTRAR" class="botao"></a>
            </form>
        </fieldset>
    </div>
</body>

</html>