<?php

    require_once 'connect.php';

    class Db_alunos extends Connect
    {
        function aluno()
        {
            $connect = $this->conectar($this->dados_conexao('alunos'));
            $resultado = mysqli_query($connect[0], 'SELECT * FROM alunos WHERE id = (SELECT MAX(id) FROM alunos)');
    
            if ($resultado) {
                $dados = $resultado->fetch_assoc();
            } else {
                echo 'Erro ao executar a busca.';
            }
    
            return $dados;
        }
    
        function inserir_dados_aluno($dados)
        {
            $connect = $this->conectar($this->dados_conexao('alunos'));
            $inserir = mysqli_query($connect[0],
                "INSERT INTO alunos (
                        nome, 
                        email, 
                        telefone, 
                        data_nasc, 
                        turno) 
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
    
        function lista_alunos()
        {
            $connect = $this->conectar($this->dados_conexao('alunos'));
            $resultado = mysqli_query($connect[0], 'SELECT * FROM alunos');
    
            if ($resultado) {
                $dados = $resultado->fetch_all(MYSQLI_NUM);
            } else {
                echo 'Erro ao executar a busca.';
            }
            return $dados;
        }   
    }
?>