<?php

    require_once 'professor.php'; 

    if ($_POST['acao-edit'] == 'editar') {
        
        edita_cad_prof($_POST);

    } elseif ($_POST['acao-del'] == 'deletar') {

        del_cad_prof($_POST);

    } else {

        verifica_form_prof($_POST);

    }

?>