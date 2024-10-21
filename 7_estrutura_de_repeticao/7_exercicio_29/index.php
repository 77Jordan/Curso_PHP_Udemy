<?php 

$vet = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$x = 0;


while($x < count($vet)) {

    $numatual = $vet[$x];

    if($numatual == 30 || $numatual == 40) {
        $x++;
        continue;
    
    }

    echo "Elemento $numatual <br>";

    $x++;
    
}


?>