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

    function mostra_lista_materias()
    {
        $conn = new Db_materias;
        $lista = $conn->lista_materias();
        return $lista;
    }

    function lista_professores()
    {
        $prof = new Db_professores;
        return mostra_lista_prof_materia($prof->lista_professores());
    }
    
    function mostra_lista_prof_materia($dados)
    { 
        foreach ($dados as $value) {
            echo "<option name='professor' value='".$value[0]."'>".$value[1]."</option>";
        }
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

?>



