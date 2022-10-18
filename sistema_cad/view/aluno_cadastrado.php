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

    <div id='div-tabela'>
        <table id='tabela'>
            <thead id='thead'>
                <tr class='titulos-thead'>
                    <th width='50px'>ID</th>
                    <th width='180px'>Nome</th>
                    <th width='260px'>E-mail</th>
                    <th width='180px'>Celular</th>
                    <th width='150px'>Nascimento</th>
                    <th width='120px'>Matricula</th>
                    <th width='100px'>Turma</th>
                    <th width='120px'>Turno</th>
                    <th width='160px'>Data de Cadastro</th>
                </tr>
            </thead>
            <tbody id='tbody'>
                <?php
                    ultimo_cad(aluno(conectar($dados_conexao)));
                ?>
            </tbody>
        </table>
    </div>
    <a href="cad_aluno.php"><input type="submit" value="Cadastrar novo" class="botao"></a>
    <a href="lista_alunos.php"><input type="button" value="Lista cadastrados" class="botao"></a>
</body>
</html>

<?php

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

function aluno($conectar)
{
    $resultado = mysqli_query($conectar[0], 'SELECT * FROM alunos WHERE id = (SELECT MAX(id) FROM alunos)');

    if ($resultado) {
        $dados = $resultado->fetch_assoc();
    } else {
        echo 'Erro ao executar a busca.';
    }

    return $dados;
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