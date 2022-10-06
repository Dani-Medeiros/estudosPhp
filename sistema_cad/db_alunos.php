<?php
    session_start();

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

    $hostname = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'escola_teste';
    $table_alunos = 'alunos';

    // $conexao = mysqli_connect($hostname, $user, $password) or die ("Não foi possível conectar ao banco de dados");
    // mysqli_select_db($conexao, $database);
    // mysqli_close($conexao);

    function conectar($database, $user, $password, $hostname)
    {
        $conectar = mysqli_connect($hostname, $user, $password);

        if(!$conectar) {
            die (trigger_error('Não foi possível conectar ao banco de dados'));
            return false;
        } else {
            $conexao = mysqli_select_db($conectar, $database);

            if(!$conexao) {
                die (trigger_error('Não foi possível conectar ao banco de dados'));
                return false;
            } else {
                return $conectar;
            }
        }
    }

    function lista_alunos($conexao)
    {

        $resultado = mysqli_query($conexao, 'SELECT * FROM alunos');
        
        if($resultado) {
            $result = mysqli_fetch_assoc($resultado);
            $linhas = mysqli_num_rows($resultado);
        } else {
            echo 'Erro ao executar a busca.';
        }

        return $result;
    }

    
    // conectar($database, $user, $password, $hostname);

   var_dump(lista_alunos(conectar($database, $user, $password, $hostname)));
?>