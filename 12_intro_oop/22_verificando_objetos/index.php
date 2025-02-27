<?php 

    class Humano {

        public function falar() {
            echo "Olá";
        }
    }

    $jordinho = new Humano;

    $teste = 10;
    
    if(is_object($jordinho)) {
        echo "É um objeto <br>";
    }else {
        echo "Não é um objeto <br>";
    }

    if(is_object($teste)) {
        echo "É um objeto <br>";
    }else {
        echo "Não é um objeto <br>";
    }

    echo get_class($jordinho) . "<br>";

    if(method_exists($jordinho, "falar")) {
        echo "Método existe <br>";
    }else {
        echo "Método não existe <br>";
    }

    if(method_exists($jordinho, "fgfgd")) {
        echo "Método existe <br>";
    }else {
        echo "Método não existe <br>";
    }
?>