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
    <p>Parabéns, professor! Agora você faz parte de uma escola de sucesso. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum illo pariatur tempora, placeat nisi molestiae commodi quidem voluptates officiis doloremque possimus quae asperiores at sed numquam provident enim iste itaque!</p><hr>

    <table>
        <?php echo tabela_professores(dadosFormulario()); ?>
    </table>

</body>

</html>



<?php
session_start();

$hostname = 'localhost';
$user = 'root';
$password = '';
$database = 'escola_teste';


function tabela_professores($dados)
{
    $html = "<thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Celular</th>
                    <th>CPF</th>
                    <th>Nascimento</th>
                    <th>Turno</th>
                    <th>Data de Cadastro</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>'".$dados['nome']."'</td>
                    <td>'".$dados['nome']."'</td>
                    <td>'".$dados['email']."'</td>
                    <td>'".$dados['celular']."'</td>
                    <td>'".$dados['cpf']."'</td>
                    <td>'".$dados['nasc']."'</td>
                    <td>'".$dados['turno']."'</td>
                    <td>'".$dados['cpf']."'</td>
                </tr>
            </tbody>";

    return $html;
}

// $query_retorna = sprintf("SELECT id, nome, email, telefone, cpf, nasc, turno, data_cad FROM professores");

var_dump($query_retorna);

function dadosFormulario()
{

    $dados_form = array(
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'celular' => $_POST['celular'],
        'cpf' => $_POST['cpf'],
        'nasc' => $_POST['nasc'],
        'turno' => $_POST['opcoes-turno']
    );

    return $dados_form;
}

function conectar($hostname, $user, $password, $database)
{
    $conexao = mysqli_connect($hostname, $user, $password, $database);

    if (!$conexao) {
        die(trigger_error('Não foi possível conectar ao banco de dados'));
        return false;
    } else {
        $conectar = mysqli_select_db($conexao, $database);

        if (!$conectar) {
            die(trigger_error('Não foi possível conectar ao banco de dados'));
            return false;
        } else {
            $conectou = array(
                '0' => $conexao,
                '1' => $conectar
            );
        }
    }

    return $conectou;
}

function lista_professores($conectar)
{
    $dados_form = dadosFormulario();
    $resultado = mysqli_query(
        $conectar[0],
        'SELECT * FROM professores'
    );

    if ($resultado) {
        $result = mysqli_fetch_assoc($resultado);
        $linhas = mysqli_num_rows($resultado);
    } else {
        echo 'Erro ao executar a busca.';
    }

    return $result;
}

function inserir_dados($conexao, $dados)
{
    $inserir = mysqli_query(
        $conexao[0],
        'INSERT INTO professores (
                nome, email, telefone, cpf, data_nasc, turno)
            VALUES (
                "' . $dados['nome'] . '",
                "' . $dados['email'] . '",
                "' . $dados['celular'] . '",
                "' . $dados['cpf'] . '",
                "' . $dados['nasc'] . '",
                "' . $dados['turno'] . '"
            )'
    );

    return $inserir;
}

if (inserir_dados(conectar($hostname, $user, $password, $database), dadosFormulario()) == false) {
    echo 'Erro ao enviar os dados.';
} else {
    return true;
}


// inserir_dados(conectar($hostname, $user, $password, $database), $dados);
?>