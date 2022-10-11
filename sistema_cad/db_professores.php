<?php

    session_start();

    $dados_conexao = array(
        'hostname' => 'localhost',
        'user' => 'root',
        'password' => '',
        'database' => 'escola_teste',
        'table' => 'professores'
    );

    function dadosFormulario()
    {
            $dados_form = array(
                'nome' => (empty($_POST['nome']) ? '' : $_POST['nome']),
                'email' => (empty($_POST['email']) ? '' : $_POST['email']),
                'celular' => (empty($_POST['celular']) ? '' : $_POST['celular']),
                'cpf' => (empty($_POST['cpf']) ? '' : $_POST['cpf']),
                'nasc' => (empty($_POST['nasc']) ? '' : $_POST['nasc']),
                'turno' => (empty($_POST['opcoes-turno']) ? '' : $_POST['opcoes-turno'])
            );

        return $dados_form;
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

    function inserir_dados($conexao, $dados)
    {
        $inserir = mysqli_query($conexao[0],
            "INSERT INTO professores (
                    nome, email, telefone, cpf, data_nasc, turno)
                VALUES (
                    '".$dados['nome']."',
                    '".$dados['email']."',
                    '".$dados['celular']."',
                    '".$dados['cpf']."',
                    '".$dados['nasc']."',
                    '".$dados['turno']."'
                )"
        );
        return $inserir;
    }

    if (!inserir_dados(conectar($dados_conexao), dadosFormulario())) {
        echo '<br><p>Erro ao enviar os dados.</p>';
    } else {
        return true;
    }
?>