<?php 

    class Animal {
        public function fazerSom() {
            echo "Som de animal sla fodase <br>";
        }
    }

    class Cachorro extends Animal {
        public function fazerSom() {
            echo "Au!, Au! <br>";
        }
    }

    class Cat extends Animal {
        public function fazerSom() {
            echo "Miau, Miau <br>";
        }
    }

    $mel = new Cat;
    $mel->fazerSom();

    $cacatua = new Animal;
    $cacatua->fazerSom();
   
    $bilu = new Cachorro;
    $bilu->fazerSom();

    //herança: o gato e o cachorro são classes vindas da classe animal
    //Polimorfismo: a classe gato e a classe cachorro modificam o metodo "fazerSom()"
    // deixando com o som que foi ditado na classe instanciada.
?>