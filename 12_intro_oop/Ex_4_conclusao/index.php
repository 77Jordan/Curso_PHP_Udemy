<?php 

    class Passenger {

        public $name;
        public $age;
        public $seatNumber;

        public function __construct($name, $age, $seatNumber){
            $this->name = $name;
            $this->age = $age;
            $this->seatNumber = $seatNumber;  
        }

        public function getName() {
            return $this->name;
        }

        public function getAge() {
            return $this->age;
        }

        public function getSeatNumber() {
            return $this->seatNumber;
        }

        public function setSeatNumber($seatNumber) {
            $this-> seatNumber = $seatNumber;
        }

        public function exibir() {
            echo "O passageiro é o $this->name, ele(a) tem $this->age anos e está no assento número $this->seatNumber <br>"; 
        }
    }

    $jordinho = new Passenger("Jordinho", 23, 77);

    $jordinho->exibir();
    echo "<br>";
    $jordinho->setSeatNumber(80);
    echo "<br>";
    $jordinho->exibir();
?>