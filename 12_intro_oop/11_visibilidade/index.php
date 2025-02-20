<?php 

   class Car {

    public $rodas = 4;
    private $vidro = "Sem pelicula";
    protected $portas = 4;

    public function getVidro() {
        return $this->vidro;
    }

    public function getportas() {
        return $this->portas;
    }

   }
   
   class Mecanico {

    public function alterarRodas($carro) {
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula) {
        $carro->vidro = $pelicula;
    }

   }

   $carro = new Car;

   echo $carro->rodas . "<br>";

   $jordinho = new Mecanico;

   $jordinho->alterarRodas($carro);

   echo $carro->rodas . "<br>";
   // NÃO PODE ALTERAR PORQUE É PRIVADO
   //$jordinho->colocarPelicula($carro, "G20");

   echo $carro->getvidro() . "<br>";
   //$carro->vidro = "teste";

   echo $carro->getportas() . "<br>";
?>