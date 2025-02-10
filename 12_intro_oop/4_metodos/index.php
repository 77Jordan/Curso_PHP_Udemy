<?php 

class Pessoa {

    function falar() {

        echo "Olá eu sou um objeto! <br>";

    }

    function somar($x, $y) {

        echo $x + $y . "<br>";
    }
    
}

$jordinho = new Pessoa;

$jordinho->falar();
$jordinho->falar();

$cbcosta = new Pessoa;

$cbcosta->falar();

$jordinho->somar(2, 2);

$cbcosta->somar(10, 12);

?>