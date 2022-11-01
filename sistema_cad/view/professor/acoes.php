<?php
include_once __DIR__ . '/../../controller/professor.php';

// var_dump(popula_form(235));
// exit();

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
<?php require_once '../cabecalho.php';  ?>

<body>
    <div class="div-cad_professor">
        <form action="/estudos_php/sistema_cad/controller/validacao_professor.php" method="POST" class="form-cad_professor">
            <h2>Editar cadastro - Professor</h2>
            <hr><br>
            <input type="text" hidden name="acao-edit" id="acao-edit" value="editar">
            <input type="text" hidden name="acao-del" id="acao-del" value="deletar">
            ID<br>
            <input type="text" name="id" id="id_prof" class="botao" value="" >
            Nome<br>
            <input type="text" name="nome" id="nome" class="botao"  value=""><br>
            E-mail<br>
            <input type="email" name="email" id="email" class="botao"  value=""><br>
            Celular<br>
            <input type="tel" name="celular" id="celular" class="botao"  value=""><br>
            CPF<br>
            <input type="text" name="cpf" id="cpf" class="botao"  value=""><br>
            Data de nascimento<br>
            <input type="date" name="nasc" id="nasc" class="botao"  value=""><br>
            Selecione o turno<br>
            <select name="opcoes-turno" id="opcoes-turno" class="botao"  value="">
                <option name="turno" value="manha">Manhã</option>
                <option name="turno" value="tarde">Tarde</option>
                <option name="turno" value="noite">Noite</option>
            </select><br><br>
            <input type="submit" value="ENVIAR DADOS" class="botao">
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
        document.querySelector("#opcoes-turno").value = dados_by_id['turno'];

        return;
    }

    preenche_form('id'); */

</script>