<?php
    require_once __DIR__ . '/../model/db_alunos.php';

    $model = new Db_alunos;

    function aluno()
    {
        $conn = new Db_alunos;
        $selecionar = $conn->aluno('alunos');
        return $selecionar;
    }

    function dados_form_aluno($dados)
    {
        $dados_form = array(
            'nome' => (empty($dados['nome']) ? '' : $dados['nome']),
            'email' => (empty($dados['email']) ? '' : $dados['email']),
            'celular' => (empty($dados['celular']) ? '' : $dados['celular']),
            'cpf' => (empty($dados['cpf']) ? '' : $dados['cpf']),
            'nasc' => (empty($dados['nasc']) ? '' : $dados['nasc']),
            'turno' => (empty($dados['turno']) ? '' : $dados['turno'])
        );

        return $dados_form;
    }

    function tabela_alunos($dados)
    {
        foreach ($dados as $key => $value) {
            
        echo "<tr class='resultados-tbody'><br>
                    <td width='50px'>" . $value[0] . "</td>
                    <td width='180px'>" . $value[1] . "</td>
                    <td width='260px'>" . $value[2] . "</td>
                    <td width='180px'>" . $value[3] . "</td>
                    <td width='150px'>" . $value[4] . "</td>
                    <td width='120px'>" . $value[5] . "</td>
                    <td width='100px'>" . $value[6] . "</td>
                    <td width='120px'>" . $value[7] . "</td>
                    <td width='160px'>" . $value[8] . "</td>
                </tr>";
        };
    }

    function ultimo_cad($dados)
    {
        echo "<tr class='resultados-tbody'>
                <td width='50px'>" . $dados['id'] . "</td>
                <td width='180px'>" . $dados['nome'] . "</td>
                <td width='260px'>" . $dados['email'] . "</td>
                <td width='180px'>" . $dados['telefone'] . "</td>
                <td width='200px'>" . $dados['data_nasc'] . "</td>
                <td width='120px'>" . $dados['matricula'] . "</td>
                <td width='120px'>" . $dados['turma'] . "</td>
                <td width='120px'>" . $dados['turno'] . "</td>
                <td width='160px'>" . $dados['data_cad'] . "</td>
            </tr>";

    }

    function mostra_lista_aluno()
    {
        $conn = new Db_alunos;
        $lista = $conn->lista_alunos();
        return $lista;
    }

    function verifica_form_aluno($dados)
    {
        $conn = new Db_alunos;
        if (!$conn->inserir_dados_aluno(dados_form_aluno($dados))) {
            echo 'Erro ao enviar dados!';
        } else {
            header('Location:../view/aluno/cadastrado.php');
        }

    }
?>