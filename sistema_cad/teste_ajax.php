<?php

    $conn = new Db_professores;
    $selec = $conn->professor();

    echo json_encode('TA MALUCO');

    /* require_once 'professor.php';

    dados_prof($id); */

?>