<?php

    session_start(); //Iniciando a minha sessão

    $login="pcanal";
    $senha="12345";

    if ($login == "pcanal" && $senha == "12345") {
        $_SESSION['logado']=true;
        header("location:restrito.php");
    } else {
        echo "Não logado";
    }

?>