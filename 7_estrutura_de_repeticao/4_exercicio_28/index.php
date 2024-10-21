<?php 

$cont = 4;

while ($cont <= 30) {

    echo "$cont <br>";

    if ($cont == 24) {

        echo "Saindo do loop";

        break;
    }

    $cont = $cont + 2;
}

?>