<?php 

$vet = [1, "Jordan", 2, "Macaco", 3.14, "Estranho", 1000, 100, 10, "fodase"];

$x = count($vet);
$y = 0;

while ($y < $x) {

    if (is_string($vet[$y])) {
        
        echo $vet[$y] . "<br>";

    }

    $y++;

}
?>