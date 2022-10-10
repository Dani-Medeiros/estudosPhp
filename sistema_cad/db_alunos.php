<?php

session_start();

$dados_conexao = array(

    'hostname' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => 'escola_teste',
    'table_alunos' => 'alunos',
);

include_once 'cabecalho.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Cadastro Realizado</title>
</head>

<body>
    <h1>Seu cadastro foi realizado com sucesso!</h1>
    <p>Parabéns, aluno! Agora você faz parte de uma escola de sucesso. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum illo pariatur tempora, placeat nisi molestiae commodi quidem voluptates officiis doloremque possimus quae asperiores at sed numquam provident enim iste itaque!</p>
    <hr>

    <?php tabela_alunos(lista_alunos(conectar($dados_conexao))); ?>

</body>

</html>

<?php



function tabela_alunos($dados)
{
    echo
        "<div id='div-tabela'>
            <table id='tabela'>
                <thead class='thead'>
                    <tr class='titulos-thead'>
                        <th width='20px'>ID</th>
                        <th width='150px'>Nome</th>
                        <th width='150px'>E-mail</th>
                        <th width='150px'>Celular</th>
                        <th width='150px'>Nascimento</th>
                        <th width='150px'>Matricula</th>
                        <th width='80px'>Turma</th>
                        <th width='80px'>Turno</th>
                        <th width='150px'>Data de Cadastro</th>
                    </tr>
                </thead>

                <tbody class='tbody'>
                    ";foreach ($dados as $key => $value) {
                        echo "<tr class='resultados-tbody'>
                        <td width='20px'>" . $value[$key]['id'] . "</td>
                        <td width='150px'>" . $value[$key]['nome'] . "</td>
                        <td width='150px'>" . $value[$key]['email'] . "</td>
                        <td width='150px'>" . $value[$key]['telefone'] . "</td>
                        <td width='150px'>" . $value[$key]['data_nasc'] . "</td>
                        <td width='150px'>" . $value[$key]['matricula'] . "</td>
                        <td width='80px'>" . $value[$key]['turma'] . "</td>
                        <td width='80px'>" . $value[$key]['turno'] . "</td>
                        <td width='150px'>" . $value[$key]['data_cad'] . "</td>
                    </tr>";
                    } echo"
                </tbody>
            </table>
        </div>";

    // return $html;
}

function dadosFormulario()
{

    $dados_form = array(
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'celular' => $_POST['celular'],
        'nasc' => $_POST['nasc'],
        'turno' => $_POST['turno']
    );

    return $dados_form;
}


function conectar($dados_conexao)
{
    $conectar = mysqli_connect($dados_conexao['hostname'], $dados_conexao['user'], $dados_conexao['password'], $dados_conexao['database']);

    if (!$conectar) {
        die(trigger_error('Não foi possível conectar ao banco de dados'));
        return false;
    } else {
        $conexao = mysqli_select_db($conectar, $dados_conexao['database']);

        if (!$conexao) {
            die(trigger_error('Não foi possível conectar ao banco de dados'));
            return false;
        } else {
            $conn = array(
                '0' => $conectar,
                '1' => $conexao
            );
        }
    }

    return $conn;
}

function lista_alunos($conectar)
{
    $resultado = mysqli_query($conectar[0],'SELECT * FROM alunos');

    if ($resultado) {
        $dados = mysqli_fetch_all($resultado);
        
    } else {
        echo 'Erro ao executar a busca.';
    }

    return $dados;
}

function inserirDados($conexao, $dados)
{
    $inserir = mysqli_query(
        $conexao[0],
        'INSERT INTO alunos (
                nome, email, telefone, data_nasc, turno) 
            VALUES (
                "' . $dados['nome'] . '",
                "' . $dados['email'] . '",
                "' . $dados['celular'] . '", 
                "' . $dados['nasc'] . '", 
                "' . $dados['turno'] . '"
            )'
    );

    return $inserir;
}

if (!inserirDados(conectar($dados_conexao), dadosFormulario())) {
    echo 'Erro ao enviar os dados.';
} else {
    return true;
}

// var_dump(conectar($dados_conexao));
var_dump(lista_alunos(conectar($dados_conexao)));
// var_dump(inserirDados(conectar($dados_conexao, dadosFormulario()));

?>