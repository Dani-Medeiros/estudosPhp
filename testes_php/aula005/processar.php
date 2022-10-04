<?php
/* 
    $user = "";
    $pass = ""; */

    $user = $_REQUEST['nome'];
    $pass = $_REQUEST['senha'];

    if($user == "" or $pass == "") {
        echo "Não foram preenchidos todos os dados.";
    }

    else
    {
        $nome = "Dani";
        $senha = "456";

        $confere = true;

        if($user != $nome or $pass != $senha) $confere = false;

        if(!$confere) {
            echo "Os dados de login não estão correto";
        } else {
            echo "Bem-vindo ao site";
        }
    }

/*     $teste = 1;

    echo "$teste";

    unset($teste);

    echo "$teste"; */

/*     if(isset($_POST['nome'])) { $user = $_POST['nome']; } 
    if(isset($_POST['senha'])) { $pass = $_POST['senha']; } */
    
 /*    echo "$user </br> $pass"; */

/*     if(isset($teste)) {
        echo "<p>A variável teste está iniciada</p>";
    } else {
        echo "<p>A variável teste não está iniciada</p>";
    } */

?>