<?php 

    class Humano {

        public $idade = 23;
        public $tamanho = 1.66;
        private $peso = 65;
    
        protected function falar() {
            echo "Falando <br>";
        }

        function acessarFalar() {
            $this->falar();
        }

        function setPeso($peso) {
            $this->peso = $peso;
        }

        function getPeso() {
            return $this->peso;
        }

    }


    class Professor extends Humano {

         public $ensino = "seila";
         public $carro = 2;

         function acessarFalarProgramador() {
            $this->falar();
        }
    }

    $Jordinho = new Humano;

    echo $Jordinho->acessarFalar();
    echo $Jordinho->idade . "<br>";
    echo $Jordinho->tamanho . "<br>";
    
    echo "<br><br>";

    $tenalmeida = new Professor;

    $tenalmeida->setPeso(700);
    echo $tenalmeida->acessarFalarProgramador();
    echo $tenalmeida->idade . "<br>";
    echo $tenalmeida->tamanho . "<br>";
    echo $tenalmeida->getPeso() . "<br>";
    echo $tenalmeida->ensino . "<br>";
    echo $tenalmeida->carro . "<br>";
    

?>