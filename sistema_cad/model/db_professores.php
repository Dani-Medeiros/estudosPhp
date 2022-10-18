<?php

    session_start();

    require_once 'connect.php';

    function dadosFormulario()
    {
        $dados_form = array(
            'nome' => (empty($_POST['nome']) ? '' : $_POST['nome']),
            'email' => (empty($_POST['email']) ? '' : $_POST['email']),
            'celular' => (empty($_POST['celular']) ? NULL : $_POST['celular']),
            'cpf' => (empty($_POST['cpf']) ? '' : $_POST['cpf']),
            'nasc' => (empty($_POST['nasc']) ? NULL : $_POST['nasc']),
            'turno' => (empty($_POST['opcoes-turno']) ? '' : $_POST['opcoes-turno'])
        );

        return $dados_form;
    }

    function inserir_dados($dados)
    {
        $conn = new Connect;
        $dados_conexao = $conn->dados_conexao('professor');
        $connect = $conn->conectar($dados_conexao);

        $inserir = mysqli_query($connect[0],
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

    
    function professor($connect)
    {
        $buscar = mysqli_query($connect[0], 'SELECT * FROM professores WHERE id = (SELECT MAX(id) FROM professores)');

        if ($buscar) {
            $pegar = $buscar->fetch_assoc(); 
        } else {
            echo 'Erro ao executar a busca!';
        }
        return $pegar;
    }

    function lista_professores()
    {
        $conn = new Connect;
        $dados = $conn->dados_conexao('professores');
        $connect = $conn->conectar($dados);

        $lista = mysqli_query($connect[0],'SELECT * FROM professores');

        if ($lista) {
            $result = $lista->fetch_all(MYSQLI_NUM);
        } else {
            echo 'Erro ao executar a busca.';
        }

        return $result;
    }

    if (!inserir_dados(dadosFormulario())) {
        echo '<br><p>Erro ao enviar os dados.</p>';
    } else {
        header('Location:../view/prof_cadastrado.php');
    }
?>