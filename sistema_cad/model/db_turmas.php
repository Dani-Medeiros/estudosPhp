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
    }
?>