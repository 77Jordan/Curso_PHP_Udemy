<?php 
 
 $x = 10;

 echo "$x é o X declarado como variável Global <br>";

 function teste(){

    $x = 5;

    echo "$x é o X declarado como variável Local<br>";

 }

  teste();
?>