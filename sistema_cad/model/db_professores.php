<?php

    require 'connect.php';
    Class Db_professores extends Connect {

    public function inserir_dados($dados)
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
    
    public function professor($connect)
    {
        $connect = $this->dados_conexao('professores');
        $buscar = mysqli_query($connect[0], 'SELECT * FROM professores WHERE id = (SELECT MAX(id) FROM professores)');

        if ($buscar) {
            $pegar = $buscar->fetch_assoc(); 
        } else {
            echo 'Erro ao executar a busca!';
        }

        return $pegar;
    }

    public function lista_professores()
    {
        $connect = $this->dados_conexao('professores');
        $lista = mysqli_query($connect[0],'SELECT * FROM professores');

        if ($lista) {
            $result = $lista->fetch_all(MYSQLI_NUM);
        } else {
            echo 'Erro ao executar a busca.';
        }

        return $result;
    }
}
?>