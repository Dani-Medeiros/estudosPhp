<!-- <?php
include_once __DIR__ . '/../../controller/professor.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Editar cadastro</title>
</head>
<?php/*  require_once '../cabecalho.php';  */ ?>

<body>
    <div class="div-cad_professor">
        <form action="/estudos_php/sistema_cad/controller/validacao_professor.php" method="POST" class="form-cad_professor">
            <h2>Editar cadastro - Professor</h2>
            <hr><br>
            <input type="text" hidden name="acao_edit" id="acao_edit" value="editar">
            <input type="text" hidden name="acao_del" id="acao_del" value="deletar">
            <?php 
                /* form_prof_preenchido(242); */
                //var_dump(form_prof_preenchido($dados));
            ?>
            <input type="submit" value="EDITAR DADOS" class="botao">
            <a href="lista.php"><input type="button" value="ACESSAR LISTAGEM" class="botao"></a>
        </form>
    </div>
</body>

</html>
<script>
    /**Recebe um objeto com os dados do prof para preencher o formulário */
   /*  function preenche_form(dados_by_id) {

        document.querySelector("#id_prof").value = dados_by_id['id'];
        document.querySelector("#nome").value = dados_by_id['nome'];
        document.querySelector("#email").value = dados_by_id['email'];
        document.querySelector("#celular").value = dados_by_id['telefone'];
        document.querySelector("#cpf").value = dados_by_id['cpf'];
        document.querySelector("#nasc").value = dados_by_id['data_nasc'];
        document.querySelector("#opcoes_turno").value = dados_by_id['turno'];

        return;
    }

    preenche_form('id'); */

</script> -->