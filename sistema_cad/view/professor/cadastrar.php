<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Cadastro - Professor</title>
</head>
    <?php include_once '../cabecalho.php'; ?>
<body>
    <main>
        <section>
            <div class="div-cad_professor">
                <form action="/estudos_php/sistema_cad/controller/validacao_professor.php" method="POST" class="form-cad_professor">
                    <h2>Cadastro Professor</h2>
                    <hr><br>
                    Nome<br>
                    <input type="text" name="nome" id="nome" required><br>
                    E-mail<br>
                    <input type="email" name="email" id="email" required><br>
                    Celular<br>
                    <input type="tel" name="celular" id="celular" pattern="^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$"><br>
                    CPF<br>
                    <input type="text" name="cpf" id="cpf" required pattern="\d{3}.\d{3}.\d{3}-?\d{2}"><br>
                    Data de nascimento<br>
                    <input type="date" name="nasc" id="nasc"><br>
                    Selecione o turno<br>
                    <select name="opcoes-turno" id="opcoes-turno">
                        <option name="turno" value="manha">Manhã</option>
                        <option name="turno" value="tarde">Tarde</option>
                        <option name="turno" value="noite">Noite</option>
                    </select><br><br>
                    <input type="submit" value="ENVIAR DADOS" class="botao">
                    <a href="lista.php"><input type="button" value="ACESSAR LISTAGEM" class="botao"></a>
                </form>
            </div>
        </section>
    </main>
</body>

</html>