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
<?php include_once '../cabecalho.php'; ?>
<body>
    <h1>Lista de cadastro dos professores!</h1>
    <hr><br>
    <div id='div-tabela'>
        <table id='tabela'>
            <thead id='thead'>
                <tr class='titulos-thead'>
                    <th width='50px' id="id-prof">ID</th>
                    <th width='130px' id="nome-prof">Nome</th>
                    <th width='230px' id="email-prof">E-mail</th>
                    <th width='140px' id="tel-prof">Celular</th>
                    <th width='140px' id="cpf-prof">CPF</th>
                    <th width='100px' id="nasc-prof">Nascimento</th>
                    <th width='100px' id="turno-prof">Turno</th>
                    <th width='140px' id="data-cad-prof">Data de Cadastro</th>
                    <th width='120px' id="acoes-prof">Ações</th>
                </tr>
            </thead>
            <tbody id='tbody'>
                <?php
                    tabela_professores(mostra_lista_prof());
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
