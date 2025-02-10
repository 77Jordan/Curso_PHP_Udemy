<?php 

    class Car {

        public $rodas = 4;
        public $aro = 20;
        public $cor = "vermelha";

        function ligar() {
            echo "VRUUUUMMM <br>";
        }

    }

    $fiat = new Car;

    echo $fiat->aro . "<br>";
    echo $fiat->rodas . "<br>";

    echo $fiat->cor . "<br>";

    $fiat->cor = "Azul";

    echo $fiat->cor . "<br>";

    $fiat->ligar();
?>