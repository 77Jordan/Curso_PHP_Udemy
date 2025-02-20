<?php 

    class Car {

        public $rodas = 4;
        private $aro = 20;
        public $cor = "vermelha";

        function ligar() {
            echo "VRUUUUMMM <br>";
        }
        function setAro($aro) {
            $this->aro = $aro;    
        }

        function getAro() {
            return $this->aro;
        }



    }

    $fiat = new Car;

    echo $fiat->getAro() . "<br>";
    
    $fiat->setAro(50);
    $fiat->setAro(70);

    echo $fiat->getAro() . "<br>";

    //echo $fiat->rodas . "<br>";

    // echo $fiat->cor . "<br>";

    // $fiat->cor = "Azul";

    // echo $fiat->cor . "<br>";

     $fiat->ligar();
?>