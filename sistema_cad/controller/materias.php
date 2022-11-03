<?php

    require_once __DIR__ . '/../model/db_materias.php';
    require_once __DIR__ . '/../model/db_professores.php';

    $model = new Db_materias;

    function materias()
    {
        $conn = new Db_materias;
        $selecionar = $conn->materias('materias');
        return $selecionar;
    }

    function dados_form_materias($dados)
    {
        $dados_form = array(
            'materia' => (empty($dados['materia']) ? '' : $dados['materia']),
            'professor' => (empty($dados['professor']) ? '' : $dados['professor'])
        );
        return $dados_form;
    }

    function tabela_materias($dados)
    {
        foreach ($dados as $value) {
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

    function mostra_lista_materias()
    {
        $conn = new Db_materias;
        $lista = $conn->lista_materias();
        return $lista;
    }
    
    function mostra_lista_prof_materia($dados)
    { 
        foreach ($dados as $value) {
            echo "<option name='professor' value='".$value[0]."'>".$value[1]."</option>";
        }
    }

    function lista_professores()
    {
        $prof = new Db_professores;
        return mostra_lista_prof_materia($prof->lista_professores());
    }
    
    function verifica_form_materia($dados)
    {
        $model = new Db_materias;
        
        if(!$model->inserir_materias(dados_form_materias($dados))) {
            echo 'Erro ao enviar dados!';
        } else {
            header('Location:../view/materias/cadastrada.php');
        }
    }

    function ultimo_cad_materia($dados)
    {
        echo "<tr id='result_tbody'>
                <td width='250px'>".$dados['materia']."</td>
                <td width='300px'>".$dados['nome_prof']."</td>
            </tr>";
    }

    function edita_cad_materia($dados)
    {
        $conn = new Db_materias;
        $edita_cad = $conn->editar_cad_materia($dados);

        if ($edita_cad) {
            header('Location:../view/materias/lista.php');
        } else {
            echo "Erro ao editar formulário";
        }

        return $edita_cad;
    }

?>



