<?php 

    class Humano {

        public $idade = 23;
        public $nome = '23';

        public function falar() {
            echo "Olá Mundo! <br>";
        }

        private function gritar() {
            echo "PHP É MUITO BOM! <br>";
        }

        public function acessarGritar() {
            $this->gritar();
        }

        protected function falarBaixinho() {
            echo "aaaaaaaa";
        }

        public function acessarFalarBaixinho() {
            $this->falarBaixinho();
        }
    }

    
    class Programador extends Humano {

            public function acessarFalarBaixinhoProgramador(){
                $this->falarBaixinho();
                $this->nome;
            }

    }

    $jordinho = new Humano;

    echo $jordinho->nome;
    echo $jordinho->falar();
    echo $jordinho->acessarGritar();
    echo $jordinho->acessarFalarBaixinho();

    echo "<br><br>";

    $cbcosta = new Programador;

    echo $cbcosta->nome;
    echo $cbcosta->falar();
    echo $cbcosta->acessarGritar();
    echo $cbcosta->acessarFalarBaixinhoProgramador();

    
?>