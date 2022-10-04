<?php

    $banco = "projeto_php";
    $usuario = "root";
    $senha = "";
    $hostname = "localhost";

    $conexao = mysqli_connect($hostname,$usuario,$senha); 
    mysqli_select_db($conexao, $banco) or die ("Não foi possível conectar ao banco");

/*     if(!$conexao) {
        echo "Não foi possível conectar ao banco";exit;
    } else {
        echo "Conexão realizada";
    } */

    mysqli_close($conexao);
?>