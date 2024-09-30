<?php 

echo "FUNÇÃO NORMAL:<br>";

function teste(){
    $a = 0;
    $a++;

    echo "$a <br>";

}

teste();
teste();
teste();

echo "<br><br>";

function testeStatic(){
   static $a = 0;
    $a++;

    echo "$a <br>";

}

echo "FUNÇÃO STATIC:<br>";

testeStatic();
testeStatic();
testeStatic();
?>