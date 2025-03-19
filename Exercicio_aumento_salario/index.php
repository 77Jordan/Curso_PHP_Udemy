<?php 
    // die("ggggg");
    class Funcionario {

        public $nome;
        public $cargo;
        public $salario;

        public function __construct($nome, $cargo, $salario)
        {
            $this->getnome() = $nome;
            $this->cargo = $cargo;
            $this->salario = $salario;
        }
        

        
        
        public function aumentarSalario($percentual) {
            
        echo (($this->salario * $percentual)/100);
          
        } 
    }
    
$jordan = new Funcionario("Jordan", "TI", 1000);

 $jordan->aumentarSalario(10); 
        
?>