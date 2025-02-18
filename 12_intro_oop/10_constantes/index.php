<?php 

    class Humano {

        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function MostrarConstante() {

            echo self::BRACOS . "<br>";

        }

    }

    $jordinho = new Humano;

    echo $jordinho::BRACOS . "<br>";

    $jordinho->MostrarConstante();

?>