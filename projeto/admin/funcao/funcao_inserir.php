<?php

    include("../../conexao/conexao.php");
    include("../../conexao/close_connection.php");

    function inserir($coluna,$valor,$tabela){
        //Arrays?
        if((is_array($coluna)) and (is_array($valor))){

            //Tem o mesmo número de elementos?
            if(count($coluna) == count($valor)) {

                //Montar SQL insert into usuario (nome, email, senha) VALUE ('Fulano', 'contato@gmail.com', '123456')
                $inserir = "INSERT INTO{$tabela} (".implode(', ',$coluna).")
                VALUES ('".implode('\',\'', $valor)."')";
            } else {
                return false;
            }  
        } else {
            //MOntar SQL
            $inserir = "INSERT INTO $tabela($coluna) VALUES ($valor)";
        }
        /* var_dump($inserir);
        exit(); */
        //Conectou?
        if($conexao = connect()) {
            //Inseriu?
            if(mysqli_query($conexao,$inserir)){
                //fecha conexão
                close_connection($conexao);
                return true;
            } else {
                echo "Query inválida";
                return false;
            }
        } else {
            return false;
        }
    }
?>