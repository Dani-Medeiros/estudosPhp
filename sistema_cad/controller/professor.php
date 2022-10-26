<?php
    require_once __DIR__ . '/../model/db_professores.php';

    $model = new Db_professores;

    function professor()
    {
        $conn = new Db_professores;
        $selecionar = $conn->professor('professores');
        return $selecionar;
    }
    
    function dados_form_prof($dados)
    {
        $dados_form = array(
            'nome' => (empty($dados['nome']) ? '' : $dados['nome']),
            'email' => (empty($dados['email']) ? '' : $dados['email']),
            'celular' => (empty($dados['celular']) ? NULL : $dados['celular']),
            'cpf' => (empty($dados['cpf']) ? '' : $dados['cpf']),
            'nasc' => (empty($dados['nasc']) ? NULL : $dados['nasc']),
            'opcoes-turno' => (empty($dados['opcoes-turno']) ? '' : $dados['opcoes-turno'])
        );

        return $dados_form;
    }
    
    function ultimo_cad_prof($dados)
    {
        echo "<tr id='result_tbody'>
                <td width='50px'>".$dados['id']."</td>
                <td width='180px'>".$dados['nome']."</td>
                <td width='260px'>".$dados['email']."</td>
                <td width='180px'>".$dados['telefone']."</td>
                <td width='200px'>".$dados['cpf']."</td>
                <td width='130px'>".$dados['data_nasc']."</td>
                <td width='120px'>".$dados['turno']."</td>
                <td width='160px'>".$dados['data_cad']."</td>
            </tr>";
    }
    
    function tabela_professores($dados)
    {
        foreach ($dados as $key => $value) {
            echo "<tr id='result-tbody'>
                    <td width='50px'>".$value[0]."</td>
                    <td width='180px'>".$value[1]."</td>
                    <td width='260px'>".$value[2]."</td>
                    <td width='180px'>".$value[3]."</td>
                    <td width='200px'>".$value[4]."</td>
                    <td width='120px'>".$value[5]."</td>
                    <td width='120px'>".$value[6]."</td>
                    <td width='160px'>".$value[7]."</td>
                 </tr>";
        }
    }

    function mostra_lista_prof()
    {
        $conn = new Db_professores;
        $lista = $conn->lista_professores();
        return $lista;
    }

    function verifica_form_prof($dados)
    {
        $conn = new Db_professores;
        if(!$conn->inserir_dados_prof(dados_form_prof($dados))){
            echo "Erro ao enviar dados";
        } else {
            header('Location:../view/professor/cadastrado.php');
        }
    }

?>