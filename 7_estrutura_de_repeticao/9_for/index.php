<?php 

    $nome = "Jordinho";

for ($i = 1; $i <= 10; $i++) {

    if ($i == 4) {

        echo "$nome <br>";

    }

    if($i == 8) {

        break;

    }

    echo "TESTE $i <br>";

}

?>