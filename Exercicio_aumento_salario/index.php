<?php 
    class Funcionario {

        public $nome;
        public $cargo;
        public $salario;
        public $resultado;

        public function __construct($nome, $cargo, $salario, $resultado = 0)
        {
            $this->nome = $nome;
            $this->cargo = $cargo;
            $this->salario = $salario;
            $this->resultado = $resultado;
        }
        
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setCargo($cargo) {
            $this->cargo = $cargo;
        }
        public function setSalario($salario) {
            $this->salario = $salario;
        }
        public function setResultado($resultado) {
            $this->resultado = $resultado;
        }
        public function getNome() {
            return $this->nome;
        }
        public function getCargo() {
            return $this->cargo;
        }
        public function getSalario() {
            return $this->salario;
        }
        public function getResultado() {
            return $this->resultado;
        }
        public function aumentarSalario($percentual) {
        echo "O salario atual do funcionario é: $this->salario reais <br>";
        echo "O aumento foi de: $percentual% <br>";    
        echo "O salario futuro será: " . $this->salario + (($this->salario * $percentual)/100) . " reais";
        }
    }
    
    class Gerente extends Funcionario {
        
        public function aumentarSalario($percentual) {
            echo "O salario atual do getente é: $this->salario reais <br>";
            echo "O aumento foi de: $percentual% <br>";    
            echo "O salario foi para: " . $this->resultado = $this->salario + (($this->salario * $percentual)/100) . " reais <br>";         
            echo "O gerente recebeu 10% de bonus pelo aumento de salario! <br>";
            echo "O salario foi para: " . $this->resultado*1.1;
        }
    }
    
    $jordan = new Funcionario("Jordan", "TI", 1000);
        
        echo "O nome do funcionário é: " . $jordan->getNome() . "<br>";
        $jordan->aumentarSalario(10); 
        
        echo "<br><br>";
        
    $chefe = new Gerente("Jordão", "Seila", 4000);
    $chefe->aumentarSalario(10);
?>