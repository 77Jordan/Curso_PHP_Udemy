<?php 

$teste = "asd";

echo "$teste variavel teste antes do IF no Global 1<br>";

if(true){
    $teste = 123;

    echo "$teste variavel teste dentro do IF <br>";

}

echo "$teste variavel teste depois do IF no Global 2 <br>";

function foi(){
    $teste = 10;

    echo "$teste variavel teste dentro de uma função";
}
foi();

echo "<br><br> Repare que a variavel teste foi modificada quando declarada novamente dentro do IF e a partir de então recebeu o valor de 123";

echo "<br><br> Dentro de uma função não é possivel acessar uma variavel declarada de forma global";

function foisim(){
    
    global $teste;

    echo "<br><br> $teste variavel teste dentro da segunda função chamando a varaivel declarada no global";
}
foisim();


?>