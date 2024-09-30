<?php 
$x = 10;
$y =& $x;

echo "O valor de X é: $x<br><br>";
echo "O valor de Y é: $y<br><br>";

$y = 20;

echo "NO CÓDIGO FOI ATRIBUIDO O VALOR DE 20 A VARIÁVEL DE NOME Y<br><br>";
echo "Agora o valor de X é: $x<br><br>";
echo "E o valor de Y é: $y<br><br>";

$x = 30;

echo "AGORA NO CÓDIGO FOI ATRIBUIDO O VALOR DE 30 A VARIÁVEL DE NOME X <br><br>";
echo "Agora o valor de X é: $x<br><br>";
echo "E o valor de Y é: $y<br><br>";
?>
