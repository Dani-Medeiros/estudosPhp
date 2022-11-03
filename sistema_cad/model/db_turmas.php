<?php

    require_once 'connect.php';
    
    class Db_turmas extends Connect 
    {
        public function turmas()
        {
            $connect = $this->conectar($this->dados_conexao('turmas'));
            $sql = mysqli_query(
                $connect[0],
                'SELECT
                    turmas.*,
                    materias.materia as nome_materia
                FROM turmas
                LEFT JOIN materias ON materias.id = turmas.nome_materia
                WHERE turmas.id = (SELECT MAX(turmas.id) FROM turmas)'
            );

            if ($sql) {
                $dados = $sql->fetch_assoc();
            } else {
                echo 'Erro ao executar a busca!';
            }
            return $dados;
        }

        public function turmas_id($dados)
        {
            $connect = $this->conectar($this->dados_conexao('turmas'));
            $seleciona = mysqli_query($connect[0], 'SELECT * FROM turmas WHERE id = '.$dados.'');

            if ($seleciona) {
                $pega_id = $seleciona->fetch_assoc();
            } else {
                die ('Não foi possível selecionar id');
            }

            return $pega_id;
        }

        public function inserir_turma($dados)
        {
            $connect = $this->conectar($this->dados_conexao('turmas'));
            $sql = mysqli_query($connect[0],
                "INSERT INTO turmas (
                    turma,
                    turno,
                    nome_materia
                ) VALUES (
                    '".$dados['turma']."',
                    '".$dados['turno']."',
                    '".$dados['nome_materia']."'
                )"
            );
            return $sql;
        }

        public function lista_turmas()
        {
            $connect = $this->conectar($this->dados_conexao('turmas'));
            $sql = mysqli_query($connect[0],
            'SELECT
                turmas.*,
                materias.materia as nome_materia
            FROM turmas
            LEFT JOIN materias ON materias.id = turmas.nome_materia'
            );

            if ($sql) {
                $dados = $sql->fetch_all(MYSQLI_NUM);
            } else {
                echo 'Erro ao executar a busca!';
            }
            return $dados;
        }

        public function editar_cad_turma($dados)
        {
            $connect = $this->conectar($this->dados_conexao('turmas'));
            $edita_cad = mysqli_query($connect[0], 
            'UPDATE
            turmas
            SET
            turma = "'.$dados['turma'].'",
            turno = "'.$dados['turno'].'",
            nome_materia = "'.$dados['materia'].'"
            WHERE
            id = "'.$dados['id'].'"'
            );

            if($edita_cad) {
                echo 'Ok';
            } else {
                echo 'Erro mysql';
            }

            return $edita_cad;
        }
    }
?>