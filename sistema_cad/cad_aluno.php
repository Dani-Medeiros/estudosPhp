<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Cadastro - Aluno</title>
</head>

<body>
    <?php
    require_once 'cabecalho.php';
    ?>

    <section class="section-cad_aluno">
        <div class="div-cad_aluno">
            <form action="" method="post" class="form-cad_aluno">
                <p>Cadastro Aluno</p>
                <hr><br>
                Nome:<br>
                <input type="text" name="nome" id="nome"><br>
                E-mail:<br>
                <input type="email" name="email" id="email"><br>
                Celular:<br>
                <input type="tel" name="celular" id="celular"><br>
                Data de nascimento:<br>
                <input type="date" name="nasc" id="nasc"><br><br>
                <input type="radio" name="turno" id="turno" value="manha">manhã<br>
                <input type="radio" name="turno" id="turno" value="tarde">tarde<br>
                <input type="radio" name="turno" id="turno" value="noite">noite
            </form>
        </div>
    </section>
</body>

</html>