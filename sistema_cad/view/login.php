<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Página de Login</title>
</head>
<?php require_once 'cabecalho.php'; ?>

<body>
    <div id="container-siscad">
        <div id="cad-aluno">
            <h2>Eu sou aluno</h2>
            <a href="/estudos_php/sistema_cad/view/aluno/cadastrar.php"><input type="submit" value="Logar aqui" class="botao"></a>
        </div>
        <div id="cad-professor">
            <h2>Eu sou professor</h2>
            <a href="/estudos_php/sistema_cad/view/professor/cadastrar.php"><input type="submit" value="Logar aqui" class="botao"></a>
        </div>
    </div>
</body>

</html>