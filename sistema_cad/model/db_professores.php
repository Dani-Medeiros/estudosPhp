<?php

    require_once 'connect.php';
    Class Db_professores extends Connect {

        public function professor()
        {
            $connect = $this->conectar($this->dados_conexao('professores'));
            $buscar = mysqli_query($connect[0], 'SELECT * FROM professores WHERE id = (SELECT MAX(id) FROM professores)');
    
            if ($buscar) {
                $pegar = $buscar->fetch_assoc(); 
            } else {
                echo 'Erro ao executar a busca!';
            }
    
            return $pegar;
        }

        public function prof_id($dados)
        {
            $connect = $this->conectar($this->dados_conexao('professores'));
            $seleciona = mysqli_query($connect[0], 'SELECT * FROM professores WHERE id = '.$dados.'');

            if($seleciona){
                $pega_id = $seleciona->fetch_assoc();
            } else {
                die ('Não foi possível selecionar o id');
            }

            return $pega_id;
        }
    
        public function inserir_dados_prof($dados)
        {
            $connect = $this->conectar($this->dados_conexao('professores'));
            $inserir = mysqli_query($connect[0],
                "INSERT INTO professores (
                        nome, 
                        email, 
                        telefone, 
                        cpf, 
                        data_nasc, 
                        turno)
                    VALUES (
                        '".$dados['nome']."',
                        '".$dados['email']."',
                        '".$dados['celular']."',
                        '".$dados['cpf']."',
                        '".$dados['nasc']."',
                        '".$dados['opcoes-turno']."'
                )"
            );

            return $inserir;
        }

        public function lista_professores()
        {
            $connect = $this->conectar($this->dados_conexao('professores'));
            $lista = mysqli_query($connect[0],'SELECT * FROM professores');

            if ($lista) {
                $result = $lista->fetch_all(MYSQLI_NUM);
            } else {
                echo 'Erro ao executar a busca.';
            }

            return $result;
        }

        public function editar_cad_prof($dados)
        {
            $connect = $this->conectar($this->dados_conexao('professores'));
            $edita_cad = mysqli_query($connect[0], 
            "UPDATE professores 
            SET
                nome = '".$dados['nome']."',
                email = '".$dados['email']."',
                telefone = '".$dados['celular']."',
                cpf = '".$dados['cpf']."',
                data_nasc = '".$dados['nasc']."',
                turno = '".$dados['opcoes-turno']."'
            WHERE 
                id = '".$dados['id']."'");

            if ($edita_cad) {
                echo 'ok';
            } else {
                echo 'erro mysql';
            }

            return $edita_cad;
        }

        public function deleta_cad_prof($dados)
        {
            $connect = $this->conectar($this->dados_conexao('professores'));
            $deleta_cad = mysqli_query($connect[0],
            "DELETE FROM professores WHERE id = '".$dados."'");

            if($deleta_cad) {
                $deletar = $deleta_cad->fetch_assoc();
            } else {
                echo 'Erro ao tentar deletar professor!';
            }

            return $deletar;
        }
    }
?>