<?php 
$pessoa = ['nome' => 'Jordan', 'idade' => 23, 'altura' => 1.66, 'peso' => '65kg'];

print_r($pessoa);

echo "<br><br>";

if($pessoa['idade'] >= 18) {
    echo "Esta pessoa é Maior de idade";
}
?>