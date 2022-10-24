<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Cadastro Realizado</title>
</head>
<?php include_once '../cabecalho.php'; ?>
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
                   include_once '../../controller/aluno.php';
                   ultimo_cad(aluno());
                ?>
            </tbody>
        </table>
    </div>
    <a href="cadastrar.php"><input type="submit" value="Cadastrar novo" class="botao"></a>
    <a href="lista.php"><input type="button" value="Lista cadastrados" class="botao"></a>
</body>
</html>