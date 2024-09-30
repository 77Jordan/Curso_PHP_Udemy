<?php 
class pessoa {
    function falar(){
        echo "Olá pessoal!";
    }

}

$jordinho = new pessoa();

$jordinho->nome = "Jordan";

echo $jordinho->nome;

echo "<br>";

$jordinho -> falar(); 
?>