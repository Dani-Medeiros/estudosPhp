<?php

    function close_connection ($connect) {
        $close = mysqli_close($connect);

        if(!$close){

            echo "Impossível fechar a conexão";
            return false;
        } 
        else {
            return true;
        }
    }

?>