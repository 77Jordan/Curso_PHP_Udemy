<?php 

    class Car {

        public $portas;
        public $cor;
        public $marca;

        function __construct($portas, $cor, $marca) {

            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;
            
        }
    }

    $fiat = new Car(4, "Vermelha", "Fiat");

    echo "O carro é da marca $fiat->marca e tem a cor $fiat->cor e tem $fiat->portas portas <br>";

    $bmw = new Car(3, "Azul", "BMW");

    echo "O carro é da marca $bmw->marca e tem a cor $bmw->cor e tem $bmw->portas portas<br>";
?>