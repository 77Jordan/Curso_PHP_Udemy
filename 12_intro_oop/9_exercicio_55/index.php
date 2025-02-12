<?php 

class Car {


    public $marca;
    public $cor;
    public $vel_max;

    function setVelMax($vel_max) {
        $this->vel_max = $vel_max;
       
    }
}

    $carro = new Car;

    $carro->marca = "Ford";
    $carro->cor = "Branco";
    $carro->setVelMax(50);

    echo "O carro possui a cor $carro->cor, é da marca $carro->marca e está a $carro->vel_max km/h <br>";

?>