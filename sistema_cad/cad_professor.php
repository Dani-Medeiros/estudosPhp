<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Cadastro - Professor</title>
</head>

<body>
    <?php
    require_once 'cabecalho.php';
    ?>
    <main>
        <section class="section-cad_professor">
            <div class="div-cad_professor">
                <form action="" method="post" class="form-cad_professor">
                    <p>Cadastro Professor</p>
                    <hr><br>
                    Nome:<br>
                    <input type="text" name="nome" id="nome" required><br>
                    E-mail:<br>
                    <input type="email" name="email" id="email"><br>
                    Celular:<br>
                    <input type="tel" name="celular" id="celular"><br>
                    CPF:<br>
                    <input type="text" name="cpf" id="cpf" required><br>
                    Data de nascimento:<br>
                    <input type="date" name="nasc" id="nasc"><br><br>
                    <select name="opcoes-turno" id="opcoes-turno">
                        <option value="turno-manha">Manhã</option>
                        <option value="turno-tarde">Tarde</option>
                        <option value="turno-noite">Noite</option>
                    </select><br><br>
                    <input type="submit" value="Enviar dados">
                </form>
            </div>
        </section>
    </main>
</body>

</html>