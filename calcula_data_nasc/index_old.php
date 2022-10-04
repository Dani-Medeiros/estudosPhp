<?php

/* $date = date_create('2000-01-01');
echo date_format($date, 'Y-m-d H:i:s');
echo '<br>';
echo date_format(date_create("1995/08/28"), "Y");
 */


/**
 * Essa função substitui a string selecionada.
 *
 * @param string $string
 * @param string $substituida
 * @return string
 */
function trata_string($string, $substituida, $letra)
{
    $nova_string = str_replace($letra, $substituida, $string);

    echo $nova_string;
}

//trata_string("Eu gosto de jogar basquete", "*", "o");

function idade($data_nasc)
{
    $data_nascimento = date_create($data_nasc);

    $dia_nasc = date_format($data_nascimento, "d");
    $mes_nasc = date_format($data_nascimento, "m");
    $ano_nasc = date_format($data_nascimento, "Y");

    $dia_atual = date("d");
    $ano_atual = date("Y");
    $mes_atual = date("m");

    $idade = $ano_atual - $ano_nasc;

    if($mes_atual <= $mes_nasc && $dia_atual < $dia_nasc){ 
        $idade -= 1;
    }

    return $idade;
}

echo idade("1995/09/20");
    
/* $texto = "Eu gosto de jogar basquete";

$novo_texto = str_replace("o", "0", $texto);

echo ($novo_texto); */

?>