<?php 

$nomes = ["Jordinho", "Jade", "Kelly", "Ketlyn", "Jutair"];

$a = 10;

foreach ($nomes as $nome) {
    echo "O nome do índice atual é $nome <br>";
    if ($nome == "Jordinho") {
        echo "Opa $a <br>";
    }
}
?>