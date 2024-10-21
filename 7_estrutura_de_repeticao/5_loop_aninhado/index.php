<?php 

$i = 1;

$c = "Variavel teste";

while($i <= 10) {

    echo "Loop externo $i <br><br>";

    $j = 1;

    echo "$c <br>";

    while($j <= 10) {

        echo "Loop interno $j <br>";

        echo "$c 2 <br>";

        $j++;

    }
    
    echo "<br>";

    $i++;
    
}

?>