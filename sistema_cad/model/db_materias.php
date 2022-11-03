<?php

    require_once 'connect.php';
    Class Db_materias extends Connect {

        public function materias ()
        {
            $connect = $this->conectar($this->dados_conexao('materias'));
            $sql = mysqli_query(
                $connect[0], 
                'SELECT 
                    materias.*, 
                    professores.nome as nome_prof 
                FROM materias 
                LEFT JOIN professores ON professores.id = materias.professor 
                WHERE materias.id = (SELECT MAX(materias.id) FROM  materias)'
            );

            if ($sql) {
                $dados = $sql->fetch_assoc();
            } else {
                echo 'Erro ao executar a busca!';
            }
            return $dados;
        }

        public function materias_id ($dados)
        {
            $connect = $this->conectar($this->dados_conexao('materias'));
            $seleciona = mysqli_query($connect[0], 'SELECT * FROM materias WHERE id = '.$dados.'');
            
            if ($seleciona) {
                $pega_id = $seleciona->fetch_assoc();
            } else {
                die ('Não foi possível selecionar id');
            }

            return $pega_id;
        }

        public function inserir_materias ($dados)
        {
            $connect = $this->conectar($this->dados_conexao('materias'));
            $sql = mysqli_query($connect[0], 
            "INSERT INTO materias (
                materia,
                professor
            ) VALUES (
                '".$dados['materia']."',
                '".$dados['professor']."'
            )"
        );

            return $sql;
        }

        public function lista_materias()
        {
            $connect = $this->conectar($this->dados_conexao('materias'));
            $sql = mysqli_query(
                $connect[0], 
                'SELECT 
                    materias.*, 
                    professores.nome as nome_prof 
                FROM materias 
                LEFT JOIN professores ON professores.id = materias.professor'
            );

            if ($sql) {
                $dados = $sql->fetch_all(MYSQLI_NUM);
            } else {
                echo 'Erro ao executar a busca!';
            }

            return $dados;
        }

        public function editar_cad_materia($dados)
        {
            $connect = $this->conectar($this->dados_conexao('materias'));
            $edita_cad = mysqli_query($connect[0], 
            'UPDATE
            materias 
            SET
            materia = "'.$dados['materia'].'",
            professor = "'.$dados['professor'].'"
            WHERE
            id = "'.$dados['id'].'"
            ');

            if ($edita_cad) {
                echo 'Ok';
            } else {
                echo 'Erro mysql';
            }

            return $edita_cad;
        }



    }

?>