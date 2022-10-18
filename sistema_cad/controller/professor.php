<?php

    require_once '../model/db_professores.php';

    function ultimo_cad($dados)
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

    function listagem_geral()
    {
        $lista = lista_professores();

        return $lista;
    }

?>