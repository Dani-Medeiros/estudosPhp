<?php

    require_once 'professor.php'; 

    if ($_POST['acao'] == 'editar') {
        
        edita_cad_prof($_POST);

    } else {

        verifica_form_prof($_POST);
    }

?>