<?php

session_start();

$hostname = 'localhost';
$user = 'root';
$password = '';
$database = 'escola_teste';

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
    <p>Parabéns, professor! Agora você faz parte de uma escola de sucesso. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum illo pariatur tempora, placeat nisi molestiae commodi quidem voluptates officiis doloremque possimus quae asperiores at sed numquam provident enim iste itaque!</p>
    <hr>

    <?php echo tabela_professores(lista_professores(conectar($hostname, $user, $password, $database))); ?>

</body>

</html>

<?php

function tabela_professores($dados)
{
    $html =
        "<div id='div-tabela'>
            <table id='tabela'>
                <thead class='thead'>
                    <tr class='titulos-thead'>
                        <th width='20px'>ID</th>
                        <th width='150px'>Nome</th>
                        <th width='150px'>E-mail</th>
                        <th width='150px'>Celular</th>
                        <th width='150px'>CPF</th>
                        <th width='150px'>Nascimento</th>
                        <th width='80px'>Turno</th>
                        <th width='150px'>Data de Cadastro</th>
                    </tr>
                </thead>

                <tbody class='tbody'>
                    <tr class='resultados-tbody'>
                        <td width='20px'>" . $dados['id'] . "</td>
                        <td width='150px'>" . $dados['nome'] . "</td>
                        <td width='150px'>" . $dados['email'] . "</td>
                        <td width='150px'>" . $dados['telefone'] . "</td>
                        <td width='150px'>" . $dados['cpf'] . "</td>
                        <td width='150px'>" . $dados['data_nasc'] . "</td>
                        <td width='80px'>" . $dados['turno'] . "</td>
                        <td width='150px'>" . $dados['data_cad'] . "</td>
                    </tr>
                </tbody>
            </table>
        </div>";

    return $html;
}

function dadosFormulario()
{
    if(!empty($_POST)) {

        $dados_form = array(
            'nome' => ($_POST['nome'] == '' ? '' : $_POST['nome']),
            'email' => $_POST['email'],
            'celular' => $_POST['celular'],
            'cpf' => $_POST['cpf'],
            'nasc' => $_POST['nasc'],
            'turno' => $_POST['opcoes-turno']
        );
    } else {
        $dados_form = '';
    }


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

if (!inserir_dados(conectar($hostname, $user, $password, $database), dadosFormulario())) {
    echo 'Erro ao enviar os dados.';
} else {
    return true;
}

// inserir_dados(conectar($hostname, $user, $password, $database), $dados);
?>