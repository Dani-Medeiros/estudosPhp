<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/style.css">
        <title>Cadastro realizado</title>
        <?php include_once 'cabecalho.php'; ?>
    </head>
    <body>
    <h1>Seu cadastro foi realizado com sucesso!</h1>
    <hr><br>
            <div id='div-tabela'>
                <table id='tabela'>
                    <thead id='thead'>
                        <tr class='titulos-thead'>
                            <th width='50px'>ID</th>
                            <th width='180px'>Nome</th>
                            <th width='260px'>E-mail</th>
                            <th width='180px'>Celular</th>
                            <th width='200px'>CPF</th>
                            <th width='120px'>Nascimento</th>
                            <th width='120px'>Turno</th>
                            <th width='160px'>Data de Cadastro</th>
                        </tr>
                    </thead>
                    <tbody id='tbody'>
                        <?php

                            include '../controller/professor.php';
                            var_dump(ultimo_cad_prof(dados_formulario()));
                        ?>
                    </tbody>
                </table>
            </div>
            <a href="./cad_professor.php"><input type="submit" value="Cadastrar novo" class="botao"></a>
            <a href="./lista_professores.php"><input type="button" value="Lista cadastrados" class="botao"></a>
    </body>
</html>