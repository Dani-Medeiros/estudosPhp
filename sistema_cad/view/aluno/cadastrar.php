<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Cadastro - Aluno</title>
</head>
<?php require_once '../cabecalho.php'; ?>

<body>
    <main>
        <div class="div-cad_aluno">
            <form action="../../controller/validacao_aluno.php" method="POST" class="form-cad_aluno">
                <h2>Cadastro Aluno</h2>
                <hr><br>
                Nome<br>
                <input type="text" name="nome" id="nome" class="botao"><br>
                E-mail<br>
                <input type="email" name="email" id="email" class="botao"><br>
                Celular<br>
                <input type="number" name="celular" id="celular" class="botao"><br>
                Data de nascimento<br>
                <input type="date" name="nasc" id="nasc" class="botao"><br>
                <br>
                <select name="opcoes-turno" id="opcoes-turno" class="botao">
                    <option name="turno" value="">Manhã</option>
                    <option name="turno" value="">Tarde</option>
                    <option name="turno" value="">Noite</option>
                </select>
                <br>
                <input type="submit" value="ENVIAR DADOS" class="botao">
                <a href="lista.php"><input type="button" value="ACESSAR LISTAGEM" class="botao"></a>
            </form>
        </div>
    </main>
</body>

</html>