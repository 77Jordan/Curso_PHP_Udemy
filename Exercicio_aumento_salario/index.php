<?php 

    class Funcionario {

        private $nome;
        private $cargo;
        private $salario;

        public function __construct($nome, $cargo, $salario)
        {
            $this->nome = $nome;
            $this->cargo = $cargo;
            $this->salario = $salario;
        }

        
    }
?>