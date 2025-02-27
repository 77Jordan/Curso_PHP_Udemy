<?php 

    class Calculadora {

        public function somar($a, $b) {
            return $a + $b; 
        }

        public function subtrair($a, $b) {
            return $a - $b; 
        }

        public function multiplicar($a, $b) {
            return $a * $b; 
        }

        public function dividir($a, $b) {
            return $a / $b; 
        }
    }

    $calc = new Calculadora;

    $calc->somar(1, 1);
    $calc->subtrair(2, 2);
    $calc->multiplicar(3, 3);
    $calc->dividir(4, 4);
?>