<?php
    session_start();

    function dadosFormulario() {

        $dados_form = array (
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'celular' => $_POST['celular'],
            'cpf' => $_POST['cpf'],
            'nasc' => $_POST['nasc'],
            'turno' => $_POST['opcoes-turno']
        );

        return $dados_form;
    }

    var_dump(dadosFormulario());
?>