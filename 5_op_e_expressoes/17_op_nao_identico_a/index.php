<?php 

$a = 1;
$b = "1";

if ($a != $b){
    echo "A é diferente de B (inteiro 1 é diferente de string 1, pois as variáveis string e int são diferentes) <br>";
}

if ($a !== $b){
    echo "A não é idêntico a B (inteiro 1 não é idêntico a string 1, pois dtring é diferente de inteiro  <br>";
}

if (1 !== 2){
    echo "1 não é idêntico a 2  <br>";
}

if (1 !== "1"){
    echo "inteiro 1 não é idêntico a string 1, pois o valor é o mesmo  <br>";
}

if ([] !== "abc"){
    echo "array não é idêntico a string vazia, pois as caracteristicas são diferentes  <br>";
}

echo "! =  julga somente o valor das variáveis, <br> ! = =  julga o valor e o tipo da variável"
?>