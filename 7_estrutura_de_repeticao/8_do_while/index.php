<?php 

$cont = 1;

$teste = "Jordinho";

echo "PROGRAMA 1 ENCREMENTANDO <br>";

do {

    echo "Foda-se $cont <br>";

    if($cont == 2) {

        echo "$teste <br>";

    }

    $cont++;

} while ($cont <= 10);

$x = 10;

echo "<br><br> PROGRAMA 2 DECREMENTANDO <br>";

do {

    echo "Foda-se $x <br>";

    if($x == 2) {

        echo "$teste <br>";

    }

    $x--;

} while ($x >= 1);

echo "<br><br> PROGRAMA 3 ENCREMENTANDO COM VARIÁVEIS <br>";

    $z = 1;

do {

    echo "Foda-se $z <br>";

    if($z == 2) {

        echo "$teste <br>";

    }

    $z++;

} while ($z <= 10);


?>


