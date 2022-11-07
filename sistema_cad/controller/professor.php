<?php
    require_once __DIR__ . '/../model/db_professores.php';

    // $model = new Db_professores;

    function ultimo_professor()
    {
        $conn = new Db_professores;
        $selecionar = $conn->professor('professores');
        return $selecionar;
    }
    
    function dados_form_prof($dados)
    {
        $dados_form = array(
            'id' => (empty($dados['id_prof']) ? '' : $dados['id_prof']),
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
                <td width='130px'>".$dados['nome']."</td>
                <td width='230px'>".$dados['email']."</td>
                <td width='140px'>".$dados['telefone']."</td>
                <td width='140px'>".$dados['cpf']."</td>
                <td width='100px'>".$dados['data_nasc']."</td>
                <td width='100px'>".$dados['turno']."</td>
                <td width='140px'>".$dados['data_cad']."</td>
                <td width='50px'><a href='acoes.php'><input type='button' value='Editar'></a></td>
                <td width='50px'><a href='acoes.php'><input type='button' value='Deletar'></a></td>
            </tr>";
    }
    
    function tabela_professores($dados)
    {
        foreach ($dados as $value) {
            echo "<tr id='result-tbody'>
                    <td width='50px'>".$value[0]."</td>
                    <td width='130px'>".$value[1]."</td>
                    <td width='230px'>".$value[2]."</td>
                    <td width='140px'>".$value[3]."</td>
                    <td width='140px'>".$value[4]."</td>
                    <td width='100px'>".$value[5]."</td>
                    <td width='100px'>".$value[6]."</td>
                    <td width='140px'>".$value[7]."</td>
                    <td width='50px'><a onclick='editar(".$value[0].")'><input type='button' value='Editar'></a></td>
                    <td width='50px'><a onclick='deletar(".$value[0].")'><input type='button' value='Deletar'></a></td>
                 </tr>";
        }
    }

    /* function form_edita_prof($dados)
    {
        echo  "ID<br>
                <input type='text' name='id' class='botao' value='".$dados['id']."' >
                Nome<br>
                <input type='text' name='nome' class='botao'  value='".$dados['nome']."'><br>
                E-mail<br>
                <input type='email' name='email' class='botao'  value='".$dados['email']."'><br>
                Celular<br>
                <input type='tel' name='celular' class='botao'  value='".$dados['telefone']."'><br>
                CPF<br>
                <input type='text' name='cpf' class='botao'  value='".$dados['cpf']."'><br>
                Data de nascimento<br>
                <input type='date' name='nasc' class='botao'  value='".$dados['data_nasc']."'><br>
                Selecione o turno<br>
                <select name='opcoes-turno' class='botao'  value='".$dados['turno']."'>
                    <option name='turno' value='manha'>Manhã</option>
                    <option name='turno' value='tarde'>Tarde</option>
                    <option name='turno' value='noite'>Noite</option>
                </select><br><br>";
    } */

    // print_r(form_prof_preenchido(242));
    // exit();

    function dados_prof($id)
    {
        $conn = new Db_professores;
        $selec = $conn->prof_id($id);

        return json_encode($selec);
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

    function edita_cad_prof($dados)
    {
        $conn = new Db_professores;
        $edita_cad = $conn->editar_cad_prof($dados);

        if($edita_cad) {
            header('Location:../view/professor/lista.php');
        } else {
            echo "Erro ao editar formulário";
        }

        return $edita_cad;
    }

    function del_cad_prof($dados)
    {
        $conn = new Db_professores;
        $resultado = $conn->deleta_cad_prof($dados);

        if($resultado) {
            header('Location:../view/professor/lista.php');
        } else {
            echo "Erro ao deletar cadastro";
        }
    }
?>

<script src="http://localhost/estudos_php/sistema_cad/js/jquery.js"></script>