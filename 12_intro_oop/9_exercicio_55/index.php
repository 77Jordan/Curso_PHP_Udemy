<?php 

class Car {


    public $marca;
    public $cor;
    public $vel_max;

    function setVelMax($vel_max) {
        $this->vel_max = $vel_max;   
    }
    function getVelMax() {
        return $this->vel_max;
    }
    
    function setCor($cor) {
        $this->cor = $cor;   
    }
    function getCor() {
        return $this->cor;
    }

    function setMarca($marca) {
        $this->marca = $marca;   
    }
    function getMarca() {
        return $this->marca;
    }

}

    $carro = new Car;

    $carro->setMarca("Ford");
    $carro->setCor("Branco");
    $carro->setVelMax(50);

    echo "O carro possui a cor " .  $carro->getCor() . ", é da marca " . $carro->getMarca() . " e está a " . $carro->getVelMax() . "km/h <br>";
    $carro->setVelMax(100);
    echo $carro->getVelMax() . "km/h <br>";
?>