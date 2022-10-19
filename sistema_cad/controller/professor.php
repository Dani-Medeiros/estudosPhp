<?php

    require '../model/db_professores.php';

    $model = new Db_professores;

    function dados_formulario()
    {
        $dados_form = array(
            'nome' => (empty($_POST['nome']) ? '' : $_POST['nome']),
            'email' => (empty($_POST['email']) ? '' : $_POST['email']),
            'celular' => (empty($_POST['celular']) ? NULL : $_POST['celular']),
            'cpf' => (empty($_POST['cpf']) ? '' : $_POST['cpf']),
            'nasc' => (empty($_POST['nasc']) ? NULL : $_POST['nasc']),
            'opcoes-turno' => (empty($_POST['opcoes-turno']) ? '' : $_POST['opcoes-turno'])
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
                <td width='120px'>".$dados['data_nasc']."</td>
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

   // var_dump($model->inserir_dados(dados_formulario()));

    if(!$model->inserir_dados(dados_formulario())){
        die("Erro ao enviar dados");
    } else {
        header('Location:../view/prof_cadastrado.php');
    }
?>