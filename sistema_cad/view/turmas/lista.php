<?php require_once '../../controller/turmas.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Lista das Turmas</title>
</head>
<?php include_once '../cabecalho.php'; ?>

<body>
    <h1>Lista de matérias!</h1>
    <hr><br>
    <div id='div-tabela'>
        <table id='tabela'>
            <thead id='thead'>
                <tr class='titulos-thead'>
                    <th width='50px' id="id">ID</th>
                    <th width='150px' id="nome">Turma</th>
                    <th width='150px' id="professor">Turno</th>
                    <th width='140px' id="data_cad">ID Matéria</th>
                    <th width='150px' id="acoes">Ações</th>
                </tr>
            </thead>
            <tbody id='tbody'>
                <?php
                tabela_turmas(mostra_lista_turmas());
                ?>
            </tbody>
        </table>
    </div>
    <a href="cadastrar.php"><input type="submit" value="CADASTRAR NOVO" class="botao"></a>
</body>
<script type="text/javascript">
    /** Redireciona para o formulário de edição */
    function editar(id) {
        if (id) {
            window.location.href = "acoes.php";
        }
    }

    /** Redireciona novamente para a lista.php */
    function deletar(id) {
        if (id) {
            window.location.href = "lista.php";
        }
    }
</script>

</html>