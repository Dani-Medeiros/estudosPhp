<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php

        if(!isset($_SESSION['login'])) {

            if(isset($_POST['acao']) ) {
                $login = 'Daniele';
                $senha = '12345';

                $login_form = $_POST['login'];
                $senha_form = $_POST['senha'];

                if($login == $login_form && $senha == $senha_form){
                    //Logado com sucesso!
                    $_SESSION['login'] = $login;
                } else {
                    //Algum erro ocorreu.
                    echo "Dados inválidos!";
                }
            }

            include('login.php');
        } else {
            include('home.php');
        }

    ?>
    
</body>
</html>