<?php

    require_once 'turmas.php';

    if ($_POST['acao-edit'] == 'editar') {
        
        edita_cad_turma($_POST);

    } else {

        verifica_form_turma($_POST);
        
    }


?>