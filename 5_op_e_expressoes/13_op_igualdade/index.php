<?php 

    if(3 == 3) {
        echo "Comparação Verdadeira 1<br>";
    }

    if (3 == 4) {
        echo "Comparação Verdadeira 2<br>";
    }

    $a = 12;
    $b = 12;
    $c = 100;

    if ($a == $b) {
        echo "Comparação Verdadeira 3<br>";
    }

    if ($a == $c) {
        echo "Comparação Verdadeira 4<br>";
    }

    $nome = "Jordinha";
    $nomeDoSistema = "Jordan";

    if ($nome == $nomeDoSistema) {
        echo "O nome coincide 1<br>";
    }

    if ($nome = $nomeDoSistema) {
        echo "O nome coincide 2<br>";
    }
?>