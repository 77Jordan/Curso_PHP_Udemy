<?php 
class Car {
    
    public $marca;
    public $modelo;
    public $ano;
     
    public function __construct($marca, $modelo, $ano) 
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirDetalhes() {
        echo "Marca: $this->marca Modelo: $this->modelo Ano: $this->ano";
    }
}

$jordi = new Car("Ford", "fiesta", "2020");

echo $jordi->exibirDetalhes();

?>