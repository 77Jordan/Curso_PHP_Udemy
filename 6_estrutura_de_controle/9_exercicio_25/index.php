<?php 

$num = 50.1;
$txt = "Jordinho";

if(is_int($num) || is_float($num)) {

    echo "$num É um número <br>";

    $mult = $num*2;

    if ($mult > 100) {
        
        echo "Numero novo maior que 100 <br>";
    }

} else {

    echo "Não é um numero <br>";

}

if(is_string($txt)) {

    echo "$txt É um texto <br>";

} else {

    echo "$txt é um numero <br>";
    
}

?>