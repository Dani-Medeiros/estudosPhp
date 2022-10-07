<?php

    session_start();
    
    $hostname = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'escola_teste';
    $table_alunos = 'alunos';

    function dadosFormulario() {

        $dados_form = array (
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'celular' => $_POST['celular'],
            'nasc' => $_POST['nasc'],
            'turno' => $_POST['turno']
        );

        return $dados_form;

    }


    function conectar($hostname, $user, $password, $database)
    {
        $conectar = mysqli_connect($hostname, $user, $password, $database);

        if(!$conectar) {
            die (trigger_error('Não foi possível conectar ao banco de dados'));
            return false;
        } else {
            $conexao = mysqli_select_db($conectar, $database);

            if(!$conexao) {
                die (trigger_error('Não foi possível conectar ao banco de dados'));
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

    function lista_alunos($conectar)
    {
        $dados_form = dadosFormulario();
        $resultado = mysqli_query(
            $conectar[0],
            'SELECT * FROM alunos'
        );
        
        if($resultado) {
            $result = mysqli_fetch_assoc($resultado);
            $linhas = mysqli_num_rows($resultado);
        } else {
            echo 'Erro ao executar a busca.';
        }

        return $result;
    }

    function inserirDados($conexao, $dados)
    {
        $inserir = mysqli_query($conexao[0], 
            'INSERT INTO alunos (
                nome, email, telefone, data_nasc, turno) 
            VALUES (
                "'.$dados['nome'].'",
                "'.$dados['email'].'",
                "'.$dados['celular'].'", 
                "'.$dados['nasc'].'", 
                "'.$dados['turno'].'"
            )'
        );

        return $inserir;
    }

    if(inserirDados(conectar($hostname, $user, $password, $database), dadosFormulario()) == false) {
        echo 'Erro ao enviar os dados.';
    } else {
        return true;
    }

    // var_dump(conectar($hostname, $user, $password, $database));
    var_dump(lista_alunos(conectar($hostname, $user, $password, $database)));
    var_dump(inserirDados(conectar($hostname, $user, $password, $database), dadosFormulario()));

?>