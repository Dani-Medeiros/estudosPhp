<?php
require_once '../../controller/professor.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Lista de professores</title>
</head>
<?php
include_once '../cabecalho.php';
?>

<body>
    <h1>Lista de cadastro dos professores!</h1>
    <hr><br>
    <div id='div-tabela'>
        <table id='tabela'>
            <thead id='thead'>
                <tr class='titulos-thead'>
                    <th width='50px'>ID</th>
                    <th width='180px'>Nome</th>
                    <th width='260px'>E-mail</th>
                    <th width='180px'>Celular</th>
                    <th width='200px'>CPF</th>
                    <th width='120px'>Nascimento</th>
                    <th width='120px'>Turno</th>
                    <th width='160px'>Data de Cadastro</th>
                </tr>
            </thead>
            <tbody id='tbody'>
                <?php
                tabela_professores(mostra_lista_prof());
                ?>
            </tbody>
        </table>
    </div>
    <a href="cadastrar.php"><input type="submit" value="Cadastrar novo" class="botao"></a>
</body>

</html>