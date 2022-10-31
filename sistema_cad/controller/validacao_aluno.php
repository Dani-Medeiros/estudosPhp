<?php

    require_once 'aluno.php';

    if ($_POST['acao'] == 'editar') {

        edita_cad_aluno($_POST);

    } else {

        verifica_form_aluno($_POST);
        
    }


?>