<?php

require_once __DIR__ . '/../model/db_professores.php';
class Professor {
    
    public $professores_model;

    public function __construct()
    {
        $this->professores_model = new Db_professores;
    }

    public function ultimo_professor()
    {
        $ult_prof = $this->professores_model->professor();
        return $ult_prof;
        // echo json_encode($ult_prof);
    }
    
    public function dados_form_prof($dados)
    {
        $dados_form = array(
            'id' => (empty($dados['id']) ? '' : $dados['id']),
            'nome' => (empty($dados['nome']) ? '' : $dados['nome']),
            'email' => (empty($dados['email']) ? '' : $dados['email']),
            'celular' => (empty($dados['celular']) ? NULL : $dados['celular']),
            'cpf' => (empty($dados['cpf']) ? '' : $dados['cpf']),
            'nasc' => (empty($dados['nasc']) ? NULL : $dados['nasc']),
            'opcoes_turno' => (empty($dados['opcoes_turno']) ? '' : $dados['opcoes_turno'])
        );

        return $dados_form;
    }
    
    public function ultimo_cad_prof($dados)
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
    
    public function tabela_professores($dados)
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

    public function dados_prof($id)
    {
        $selec = $this->professores_model->prof_id($id);
        echo json_encode($selec);
    }

    public function mostra_lista_prof()
    {
        $conn = new Db_professores;
        $lista = $conn->lista_professores();
        return $lista;
    }

    public function verifica_form_prof($dados)
    {
        if(!$this->conexao->inserir_dados_prof($this->dados_form_prof($dados))){
            echo "Erro ao enviar dados";
        } else {
            header('Location:../view/professor/cadastrado.php');
        }
    }

    public function edita_cad_prof($dados)
    {
        $edita_cad = $this->professores_model->editar_cad_prof($this->dados_form_prof($dados));

        if($edita_cad) {
            header('Location:../view/professor/lista.php');
        } else {
            // echo "Erro ao editar formulário";
        }

        return $edita_cad;
    }

    public function del_cad_prof($dados)
    {
        $resultado = $this->professores_model->deleta_cad_prof($dados);

        if($resultado) {
            header('Location:../view/professor/lista.php');
        } else {
            echo "Erro ao deletar cadastro";
        }
    }
}

$tes = new Professor;

?>