<?php 

    class Pessoa {

        public $nome;
        public $idade;

        function andar($m) {

            echo "A pessoa andou $m metros <br>";

        }
    }

    $soldado = new Pessoa;

    $soldado->nome = "Jordinho";
    $soldado->idade = 23;

   echo "O nome da peeoa é $soldado->nome e a pessoa tem $soldado->idade anos. <br>";
    echo $soldado->andar(10);

    $cabo = new Pessoa;

    $cabo->nome = "Costa";
    $cabo->idade = 23;

   echo "O nome da peeoa é $cabo->nome e a pessoa tem $cabo->idade anos. <br>";
    echo $cabo->andar(10);
?>