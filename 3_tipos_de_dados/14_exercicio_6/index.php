<?php 
$Car = ['rodas' => '4', 'cor' => 'azul', 'situação' => 'novo'];

echo $Car['cor'];
echo "<br><br>";
print_r($Car);

$cor = $Car['cor'];
$situacao = $Car['situação'];

echo "<br><br>";

echo "O carro tem a cor $cor e se encontra $situacao";
?>