<?php 

    class Pessoa {
        
        public $nome;
        public $idade;

        public function setNome($nome) 
        {
            $this->nome = $nome;    
        }
        public function getNome() 
        {
            return $this->nome;
        }

        public function setIdade($idade) 
        {
            $this->idade = $idade;
        }
        public function getIdade() 
        {
            return $this->idade;
        }

        public function apresentar() 
        {
            echo "O $this->nome tem $this->idade anos";
        }         
    }

    $jordi = new Pessoa;
    
    $jordi->setNome("Jordinho");
    $jordi->setIdade(24);
    
    echo $jordi->apresentar();

    class People {
        public $name;
        public $age;

        public function __construct($name, $age) 
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function apresentar() {
            echo "O $this->name tem $this->age anos";
        }
    }

    echo "<br><br>";
        
    $jordinho = new People("Jordinha", 23);
    
    return $jordinho->apresentar();

?>