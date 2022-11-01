<?php
require_once '../../controller/materias.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Lista de matérias</title>
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
                    <th width='150px' id="nome">Matéria</th>
                    <th width='150px' id="professor">ID Professor</th>
                    <th width='140px' id="data_cad">Data de Cadastro</th>
                    <th width='150px' id="acoes">Ações</th>
                </tr>
            </thead>
            <tbody id='tbody'>
                <?php
                    tabela_materias(mostra_lista_materias());
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
        if(id) {
            window.location.href = "lista.php";
        }
    }

</script>

</html>
