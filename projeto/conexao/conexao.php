<?php

    function connect ($banco = "projeto_php", $usuario = "root", $senha = "", $hostname = "localhost") {
        //Tenta estabelecer a conexão
        $connect = mysqli_connect($hostname, $usuario, $senha);

        //Conseguiu conectar?
        if(!$connect){
            die(trigger_error("Não foi possível estabelecer a conexão"));
            return false;
        } else {
            //Tenta selecionar o banco de dados
            $db = mysqli_select_db($connect, $banco);
            //Conseguiu selecionar o banco?
            if(!$db) {
                die(trigger_error("Não foi possível selecionar o banco de dados"));
                return false;
            } else {
                return $connect;
            }
        }

        
    }

?>