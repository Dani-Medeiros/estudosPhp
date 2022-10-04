<?php

    /* $x = 10;
    $y = 20;

    $result = $x+$y;

    echo $result; */

    /* function soma($x, $y)
    {
        return $x+$y."</br>";
    }

    echo soma(25,45);

    for($i=0; $i<5; $i++) */
        
    function media ($n1, $n2, $n3, $n4) {
            $result = ($n1+$n2+$n3+$n4) / 4;
            return $result;
        }

    /* $media = media(10, 8, 7, 10);
    echo "A nota que você tirou foi: ".$media; */

    $alunos[0]["nome"] = "Alice";
    $alunos[0]["media"] = media(10, 8, 7, 10);
    $alunos[1]["nome"] = "Joaquim";
    $alunos[1]["media"] = media(10, 7, 9, 8);
    $alunos[2]["nome"] = "Maurício";
    $alunos[2]["media"] = media(9, 8, 7, 8);
    $alunos[3]["nome"] = "Ana";
    $alunos[3]["media"] = media(10, 6, 9, 8);

    for($i=0; $i<count($alunos); $i++)
    {
        echo "<b>Nome do aluno: </b>".$alunos[$i]["nome"]."<br>";
        echo "<b>Media do aluno: </b>".$alunos[$i]["media"]."<br><br>";
    }
?>