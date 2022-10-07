<?php
    session_start();

    $hostname = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'escola_teste';
    $table_alunos = 'professores';

    function dadosFormulario() {

        $dados_form = array (
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'celular' => $_POST['celular'],
            'cpf' => $_POST['cpf'],
            'nasc' => $_POST['nasc'],
            'turno' => $_POST['opcoes-turno']
        );

        return $dados_form;
    }

    function conectar($hostname, $user, $password, $database) 
    {
        $conexao = mysqli_connect($hostname, $user, $password, $database);

        if(!$conexao) {
            die (trigger_error('Não foi possível conectar ao banco de dados'));
            return false;
        } else {
            $conectar = mysqli_select_db($conexao, $database);

            if(!$conectar) {
                die (trigger_error('Não foi possível conectar ao banco de dados'));
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

    function lista_professores($conectar)
    {
        $dados_form = dadosFormulario();
        $resultado = mysqli_query(
            $conectar[0],
            'SELECT * FROM professores'
        );
        
        if($resultado) {
            $result = mysqli_fetch_assoc($resultado);
            $linhas = mysqli_num_rows($resultado);
        } else {
            echo 'Erro ao executar a busca.';
        }

        return $result;

    }

    function inserir_dados($conexao, $dados) 
    {
        $inserir = mysqli_query($conexao[0],
            'INSERT INTO professores (
                nome, email, telefone, cpf, data_nasc, turno)
            VALUES (
                "'.$dados['nome'].'",
                "'.$dados['email'].'",
                "'.$dados['celular'].'",
                "'.$dados['cpf'].'",
                "'.$dados['nasc'].'",
                "'.$dados['turno'].'"
            )'
        );

        return $inserir;
    }

    if(inserir_dados(conectar($hostname, $user, $password, $database), dadosFormulario()) == false) {
        echo 'Erro ao enviar os dados.';
    } else {
        return true;
    }


    inserir_dados(conectar($hostname, $user, $password, $database), $dados);
?>