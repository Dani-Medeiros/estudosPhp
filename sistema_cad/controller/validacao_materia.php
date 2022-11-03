<?php 

    require_once 'materias.php';

    if ($_POST['acao-edit'] == 'editar') {
        
        edita_cad_materia($_POST);

    } else {

        verifica_form_materia($_POST);

    }

?>