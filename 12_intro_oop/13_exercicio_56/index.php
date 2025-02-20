<?php 

    class Humano {

        public $idade = 23;
        public $tamanho = 1.66;
        public $peso = 65;

        protected function falar() {
            echo "Falando <br>";
        }

        public function acessarFalar() {
            $this->falar();
        }

    }


    class Professor extends Humano {

        public $ensino = "seila";
        public $carro = 2;

        public function acessarFalarProgramador() {
            $this->falar();
        }
    }

    $Jordinho = new Humano;

    echo $Jordinho->acessarFalar();
    echo $Jordinho->idade . "<br>";
    echo $Jordinho->tamanho . "<br>";
    echo $Jordinho->peso . "<br>";

    echo "<br><br>";

    $tenalmeida = new Professor;

    echo $tenalmeida->acessarFalarProgramador();
    echo $tenalmeida->idade . "<br>";
    echo $tenalmeida->tamanho . "<br>";
    echo $tenalmeida->peso . "<br>";
    echo $tenalmeida->ensino . "<br>";
    echo $tenalmeida->carro . "<br>";
?>