<?php

    class Connect {

        function dados_conexao($tabela) 
        {
            $dados_conexao = array(
                'hostname' => 'localhost',
                'user' => 'root',
                'password' => '',
                'database' => 'escola_teste',
                'table' => $tabela
            );

            return $dados_conexao;
        }

        function conectar($dados_conexao)
        {
            $conexao = mysqli_connect($dados_conexao['hostname'], $dados_conexao['user'], $dados_conexao['password'], $dados_conexao['database']);

            if (!$conexao) {
                die(trigger_error('Não foi possível conectar ao banco de dados'));
                return false;
            } else {
                $conectar = mysqli_select_db($conexao, $dados_conexao['database']);

                if (!$conectar) {
                    die(trigger_error('Não foi possível conectar ao banco de dados'));
                    return false;
                } else {
                    $conectou = array(
                        '0' => $conexao,
                        '1' => $conectar
                    );
                }
            }

            return $conectou;
        }
    }


?>