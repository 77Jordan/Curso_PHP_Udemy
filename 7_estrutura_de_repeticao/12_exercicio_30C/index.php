<?php 

$vet = [];



for ($i = 10; $i <= 20; $i++) {

    array_push($vet, $i);
   
}

print_r($vet);
echo "<br><br>";

for ($i = 0; $i <= count ($vet); $i++) {

    if ($vet[$i] % 2 != 0) {

        echo "$vet[$i] É IMPAR <br>";

    }

    
}

?>
