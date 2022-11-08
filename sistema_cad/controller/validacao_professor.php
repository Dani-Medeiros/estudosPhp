<?php

    require_once 'professor.php';

    $professor = new Professor;
    
    if ($_POST['acao-edit'] == 'editar') {
        
        $professor->edita_cad_prof($_POST);

    } elseif ($_POST['acao-del'] == 'deletar') {

        $professor->del_cad_prof($_POST);

    } else {

        $professor->verifica_form_prof($_POST);

    }

?>