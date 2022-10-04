<?php

    $para = "danielemedeirosx@gmail.com, danielemedeiros9@gmail.com";
    $assunto = "Contato pelo site";
    $nome = $_REQUEST['nome'];
    $tel = $_REQUEST['telefone'];
    $email = $_REQUEST['email'];
    $mensagem = $_REQUEST['assunto'];

    $body = "<strong>Mensagem de Contato</strong><br><br>";
    $body .= "<strong>Nome: </strong> $nome";
    $body .= "<br><strong>Telefone: </strong> $tel";
    $body .= "<br><strong>Email: </strong> $email";
    $body .= "<br><strong>Mensagem: </strong> $mensagem";

    $header = "Content-Type: text/html; charset= utf-8\n";
    $header .= "From: $email Reply-to: $email";

@mail($para, $assunto, $body, $header);
header("location:index.php?mensagem=enviado");
?>