<?php 

    class Dog {

        function latir() {
            echo "Aain! Aain! <br>";
        }

        function andar($mts) {
            echo "andando $mts metros <br>";
        }

    }

    $pitbull = new Dog;
    $viralata = new Dog;
    $pincher = new Dog;

    $pitbull->latir();
    $viralata->latir();
    $pincher->latir();

    $pitbull->andar(5);
    $viralata->andar(10);
    $pincher->andar(15);
?>