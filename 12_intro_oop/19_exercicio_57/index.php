<?php 

    class Dog {

        public $nome;
        public $raca;
        public $vel_max;
        public $cor;

        function __construct($nome, $raca, $vel_max, $cor)
        {
            $this->nome = $nome;
            $this->raca = $raca;
            $this->vel_max = $vel_max;
            $this->cor = $cor;
            
        }

        function exibir() {

            echo "O $this->nome, é da raça $this->raca, atinge a velocidade de $this->vel_max km/h e é $this->cor <br>";
        }
    }

    

    $pitoco = new Dog("Pitoco", "Pitbull", 60, "Branco");

    $pitoco->exibir();

    $trovao = new Dog("Trovão", "vira lata", 10, "caramelo");

    $trovao->exibir();
?>