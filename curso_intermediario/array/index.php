<?php
    $x[0] = "oi";
    $x[1] = "ola";

    //echo $x[1];

    $zoo = array("Leão", "Girafa", "Elefante"); // Valor implícito - Automático - Começa no 0
    //echo $zoo[0];

    $x[0][0] = "Valor 1";
    $x[0][1] = "Valor 2";
    $x[1] = "Valor 3";
    //echo $x[1];

    $cor = array(0=>array(0=>"branco", 1=>"amarelo"),1=>"laranja");
    //echo $cor[0][1];

    $nomes = array(0=>"Virgílio", 1=>"Lucas", 2=>"Yuri", 3=>"Daniele", 4=>"Phelipe"); //Valores explícitos
    //echo $nomes[3];

    $config = array(); //Declarando a variável
    $config["nome"] = "PontoCOM";
    $config["email"] = "contato@pontocomdesenvolvedor.net";
    $config["site"] = "http://pontocomdesenvolvedor.net";
    //echo $config["nome"]." - ".$config["site"];

    $ex = array("nome" => "PontoCOM", 
                "email" => "contato@pontocomdesenvolvedor.net", 
                "site" => "http://pontocomdesenvolvedor.net",
                "ativo" => true,
                "numero" => 200
            );

    //echo $ex["email"];

    //print_r e var_dump

    //print_r($ex);

    //var_dump($ex);

    //for($i=0; $i<=4; $i++) echo $nomes[$i]."</br>";

    //echo count($nomes);

    //for($i=0; $i<count($nomes); $i++) echo $nomes[$i]."</br>";

    $fim = 10;
    $i = 0;
    $array = array();

    while($fim>=$i){
        $array[] = "Contador: ".$i;
        $i++;
    }

    //print_r($array);
?>