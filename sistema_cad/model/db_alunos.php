<?php

session_start();

$dados_conexao = array(

    'hostname' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => 'escola_teste',
    'table_alunos' => 'alunos',
);

include_once 'cabecalho.php';

function dados_formulario()
{
    $dados_form = array(
        'nome' => (empty($_POST['nome']) ? '' : $_POST['nome']),
        'email' => (empty($_POST['email']) ? '' : $_POST['email']),
        'celular' => (empty($_POST['celular']) ? '' : $_POST['celular']),
        'cpf' => (empty($_POST['nasc']) ? '' : $_POST['cpf']),
        'nasc' => (empty($_POST['nasc']) ? '' : $_POST['nasc']),
        'turno' => (empty($_POST['turno']) ? '' : $_POST['turno'])
    );

    return $dados_form;
}


function conectar($dados_conexao)
{
    $conectar = mysqli_connect($dados_conexao['hostname'], $dados_conexao['user'], $dados_conexao['password'], $dados_conexao['database']);

    if (!$conectar) {
        die(trigger_error('Não foi possível conectar ao banco de dados'));
        return false;
    } else {
        $conexao = mysqli_select_db($conectar, $dados_conexao['database']);

        if (!$conexao) {
            die(trigger_error('Não foi possível conectar ao banco de dados'));
            return false;
        } else {
            $conn = array(
                '0' => $conectar,
                '1' => $conexao
            );
        }
    }

    return $conn;
}

function inserir_dados($conexao, $dados)
{
    $inserir = mysqli_query($conexao[0],
        "INSERT INTO alunos (
                nome, email, telefone, data_nasc, turno) 
            VALUES (
                '". $dados['nome'] ."',
                '". $dados['email'] ."',
                '". $dados['celular'] ."', 
                '". $dados['nasc'] ."', 
                '". $dados['turno'] ."'
            )"
    );

    return $inserir;
}

if (!inserir_dados(conectar($dados_conexao), dados_formulario())) {
    echo '<br><p>Erro ao enviar os dados.</p>';
} else {
    header('Location:aluno_cadastrado.php');
}

?>