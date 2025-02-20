<?php 

    interface Caracteristicas {

        const nome = "Jordinho";

        public function falar();

    }

    class Humano implements Caracteristicas {

        public $idade = 29;

        public function falar() {
            echo "Olá mundo! <br>";
        }

        public function dizerNome() {

            echo "Meu nome é " . self::nome . "<br>";
            
        }

    }

    $Jordinho = new Humano;

    $Jordinho->falar();
    $Jordinho->dizerNome();

?>