<?php

class Ajudantes {

    /**
     * Retorna data atual e formata o banco de dados com /
     *
     * @return array
     */

    function dataAtual() {
        
        $ano = date('Y');
        $mes = date('m');
        $dia = date('d');

        $data = array(
            '0' => $ano.'/'.$mes.'/'.$dia,
            '1' => array(
                'ano' => $ano,
                'mes' => $mes,
                'dia' => $dia
            )
        );

        return $data;
    }

    
    function validaData($date, $format = 'Y-m-d')
    {
        $data = DateTime::createFromFormat($format, $date);
        return $data && $data ->format($format) == $date;
    }

    
    function formatarData($data, $format)
    {
        $data_formatada = date_format(date_create($data), $format);

        return $data_formatada;
    }
}

$classe = new Ajudantes;

$data_atual = $classe->dataAtual();