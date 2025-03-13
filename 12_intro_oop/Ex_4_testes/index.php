<?php 

    class Carro {

        public $marca;
        public $modelo;
        public $ano;


        
        public function setMarca($marca) {
            $this->marca = $marca;
        }
        public function getMarca() {
            return $this->marca;
        }
        
        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }
        public function getModelo() {
            return $this->modelo;
        }
        
        public function setAno($ano) {
            $this->ano = $ano;
        }
        public function getAno() {
            return $this->ano;
        }
        
        public function exibirDetalhes() {
            echo "o caro é da marca $this->marca, do modelo $this->modelo e do ano $this->ano";
        }
        
        
    }

    $fuck = new Carro;

    
    $fuck->setMarca("fiat");
    $fuck->setModelo("Argo");
    $fuck->setAno("2020");
    
    echo $fuck->exibirDetalhes();
?>