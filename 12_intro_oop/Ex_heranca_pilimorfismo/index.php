<?php 

    class Animal {
        public function fazerSom() 
        {
            echo "Som de animal <br>";
        }
    }
    
    class Gato extends Animal {
        
        public function SomGato() 
        {
            echo "Miau, Miau <br>";
        }
        public function Somanimal() 
        {
            $this->fazerSom();
        }
        
    }

    class cachorro extends Animal {
        public function somCachorro() 
        {
            echo "Au, Au! <br>";
        }
        public function Somanimal()
        {
            $this->fazerSom();
        }
        
    }

    $cavalo = new Animal;
    
    $cavalo->fazerSom();
    
    $Mel = new cachorro;
    
    echo $Mel->fazerSom();
    echo $Mel->somCachorro();

    $fodase = new Gato;
    echo $fodase->fazerSom();
    echo $fodase->SomGato();  
?>