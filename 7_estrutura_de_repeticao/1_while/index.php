<?php 

echo "CODIGO 1 <br>";

$x = 1;

while($x <= 10) {

    echo $x . "<br>";

    $x++;
}

echo "CODIGO 2 <br>";

$y = 0;

while($y <= 10) {

    echo $y . "<br>";

    $y = $y + 2; // ou $y += 2;
}

echo "CODIGO 3 <br>";

$z = 10;

while($z > 0) {

    echo $z . "<br>";

    $z--;
}

echo "CODIGO 4 <br>";

$a = 10;

while($a > 0) {

    if($a % 2 != 0) {

        echo $a . "<br>";

    }

    $a--;

}

?>