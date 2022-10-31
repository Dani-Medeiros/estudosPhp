<?php

    require_once 'connect.php';
    class Db_alunos extends Connect
    {
        public function aluno()
        {
            $connect = $this->conectar($this->dados_conexao('alunos'));
            $resultado = mysqli_query($connect[0], 'SELECT * FROM alunos WHERE id = (SELECT MAX(id) FROM alunos)');
    
            if ($resultado) {
                $dados = $resultado->fetch_assoc();
            } else {
                echo 'Erro ao executar a busca!';
            }
    
            return $dados;
        }

        public function aluno_id($id)
        {
            $connect = $this->conectar($this->dados_conexao('alunos'));
            $seleciona = mysqli_query($connect[0], "SELECT * FROM alunos WHERE id = '.$id.'");

            if($seleciona) {
                $pega_id = $seleciona->fetch_assoc();
            } else {
                die ('Não foi possível selecionar id');
            }

            return $pega_id;
        }
    
        public function inserir_dados_aluno($dados)
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
    
        public function lista_alunos()
        {
            $connect = $this->conectar($this->dados_conexao('alunos'));
            $resultado = mysqli_query($connect[0], 'SELECT * FROM alunos');
    
            if ($resultado) {
                $dados = $resultado->fetch_all(MYSQLI_NUM);
            } else {
                echo 'Erro ao executar a busca!';
            }
            return $dados;
        }

        function editar_cad_aluno($dados)
        {
            $connect = $this->conectar($this->dados_conexao('alunos'));
            $edita_cad = mysqli_query($connect[0], 
            "UPDATE 
                alunos
             SET 
                nome = '".$dados['nome']."',
                email = '".$dados['email']."',
                telefone = '".$dados['celular']."',
                data_nasc = '".$dados['nasc']."',
                matricula = '".$dados['matricula']."',
                turma = '".$dados['turma']."',
                turno = '".$dados['opcoes-turno']."'
            WHERE
                id = '".$dados['id']."'
            ");

            if($edita_cad) {
                echo "Ok";
            } else {
                echo "Erro mysql";
            }

            return $edita_cad;
        }
        
    }
?>