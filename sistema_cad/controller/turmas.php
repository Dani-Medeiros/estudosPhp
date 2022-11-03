<?php

    require_once __DIR__ . '/../model/db_turmas.php';
    require_once __DIR__ . '/../model/db_materias.php';

    $model = new Db_turmas;

    function turmas()
    {
        $conn = new Db_turmas;
        $selecionar = $conn->turmas('turmas');
        return $selecionar;
    }

    function dados_form_turma($dados)
    {
        $dados_form = array(
            'turma' => (empty($dados['turma']) ? '' : $dados['turma']),
            'turno' => (empty($dados['turno']) ? '' : $dados['turno']),
            'nome_materia' => (empty($dados['nome_materia']) ? '' : $dados['nome_materia'])
        );

        return $dados_form;
    }

    function tabela_turmas($dados)
    {
        foreach($dados as $value){
            echo "<tr id='result-tbody'>
                    <td width='50px'>".$value[0]."</td>
                    <td width='150px'>".$value[1]."</td>
                    <td width='150px'>".$value[2]."</td>
                    <td width='140px'>".$value[3]."</td>
                    <td width='50px'><a onclick='editar(".$value[0].")'><input type='button' value='Editar'></a></td>
                    <td width='50px'><a onclick='deletar(".$value[0].")'><input type='button' value='Deletar'></a></td>
                </tr>";
        }
    }

    function mostra_lista_turmas()
    {
        $conn = new Db_turmas;
        $lista = $conn->lista_turmas();
        return $lista;
    }

    function mostra_lista_materias_turma($dados)
    {
        foreach ($dados as $value) {
            echo "<option name='nome_materia' value='".$value[0]."'>".$value[1]."</option>";
        }
    }
    
    function lista_materias()
    {
        $materia = new Db_materias;
        return mostra_lista_materias_turma($materia->lista_materias());
    }

    function verifica_form_turma($dados)
    {
        $model = new Db_turmas;

        if(!$model->inserir_turma(dados_form_turma($dados))) {
            echo 'Erro ao enviar dados!';
        } else {
            header('Location:../view/turmas/cadastrada.php');
        }
    }

    function ultimo_cad_turma($dados)
    {
        echo "<tr id='result_tbody'>
                <td width='150px'>".$dados['turma']."</td>
                <td width='150px'>".$dados['turno']."</td>
                <td width='250px'>".$dados['nome_materia']."</td>
            </tr>";
    }
    
    function edita_cad_turma($dados)
    {
        $conn = new Db_turmas;
        $edita = $conn->editar_cad_turma($dados);

        if($edita) {
            header('Location:../view/turmas/lista.php');
        } else {
            echo 'Erro ao editar formulário';
        }
    }

?>