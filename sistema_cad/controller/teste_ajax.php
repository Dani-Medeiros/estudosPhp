<?php

    $conn = new Db_professores;
    $selec = $conn->prof_id($id);

    echo json_encode($selec);

    // require_once 'professor.php';

    // dados_prof($id);

?>