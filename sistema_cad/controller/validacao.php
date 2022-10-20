<?php
    require_once 'professor.php'; 
    require_once 'aluno.php';

    $redireciona_p = verifica_form_prof($_POST);
    $redireciona_a = verifica_form_aluno($_POST);
?>