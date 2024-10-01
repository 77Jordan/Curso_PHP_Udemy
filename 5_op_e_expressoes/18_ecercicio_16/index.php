<?php 

$a = 5;
$b = 3;
$c = "5";

if ($a == $b){
    echo "5 não é igual a 3 (== julga somente valor das variáveis sem contar com o tipo delas) <br>";
}

if ($a === $c){
    echo "inteiro 5  não é idêntico a string 5, pois o tipo string é diferente de int <br>";
}

if ($a == $c){
    echo "inteiro 5 é igual a string 5, pois == julga somente o valor das variáveis <br>";
}

if ($a !== $c){
    echo "inteiro 5 é igual a string 5, pois ! = = julga se a variável é diferente quanto a valor e tipo <br>";
}

if ($a != $c){
    echo "inteiro 5 é igual a string 5, pois !  = julga se a variável é diferente SOMENTE quanto ao valor <br>";
}
?>