<?php 

    class Retangulo {

        public $base;
        public $altura;

        public function __construct($base, $altura) {
            $this->base = $base;
            $this->altura = $altura;
        }
        public function calcularArea() {
            return $this->base * $this->altura;
        }
        public function getBase() {
            return $this->base;
        }
        public function getAltura() {
            return $this->altura;
        }
    }

    $meuzovo = new Retangulo(25, 4);
    
    echo "Base: " . $meuzovo->getBase() . "<br>";
    echo "Altura: " . $meuzovo->getAltura() . "<br>";
    echo "Área: " . $meuzovo->calcularArea() . "<br>";
?>