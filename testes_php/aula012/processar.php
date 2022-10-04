<?php

    echo "<h3>Resultados do Formulário:</h3><hr>";

    /* if(isset($_REQUEST['frutas'])) 
    {
        $frutas_escolhidas = $_REQUEST['frutas'];
        
        if(count($frutas_escolhidas) == 1) {
            echo "<p>A fruta escolhida foi: </p>".$frutas_escolhidas[0];
        } else {
            echo "<p>Foram escolhidas as frutas: </p>";
            for($i = 0; $i < count($frutas_escolhidas); $i++){
                if($i < count($frutas_escolhidas)-1){
                    echo $frutas_escolhidas[$i].", ";
                } else {
                    echo $frutas_escolhidas[$i].".";
                }
            }
        }
    }
    else 
    {
        echo "<p>Nenhuma fruta foi escolhida.</p>";
    } */


    //-------------------------------------------------------------------------------------

    $kiwi = isset($_REQUEST['fruta1']) ? "Sim" : "Não";
    $morango = isset($_REQUEST['fruta2']) ? "Sim" : "Não";
    $banana = isset($_REQUEST['fruta3']) ? "Sim" : "Não";
    $abacate = isset($_REQUEST['fruta4']) ? "Sim" : "Não";

    echo "O kiwi foi escolhido? $kiwi.<br>
          O morango foi escolhido? $morango.<br>
          A banana foi escolhida? $banana.<br>
          O abacate foi escolhido? $abacate"

?>