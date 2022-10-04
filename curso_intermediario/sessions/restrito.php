<?php
    session_start();

/* 
isset(); // É setado - Verifica se a variável existe

unset(); // Não setado - Destrói a variável de sessão. Realiza o logout

*/
?>

<?php 
    if (isset($_SESSION['logado'])) {

        echo "<h1>Usuário logado!</h1>";
        echo "<a href='logout.php'>Sair</a>";

    } else {

        echo "<h1>Página restrita, volte e tente novamente.</h1>";
        echo "<a href='index.php'>Logar</a>";
    } 

?>



