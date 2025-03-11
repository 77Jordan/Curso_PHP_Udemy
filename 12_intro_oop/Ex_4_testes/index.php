<?php 

    class Carro {

        public $marca;
        public $modelo;
        public $ano;


        
        function setMarca($marca) {
            $this->marca = $marca;
        }

        function getMarca() {
            return $this->marca;
        }
        
    }

    $fuck = new Carro;

    $fuck->setMarca("fiat");
    
    echo $fuck->getMarca();
?>