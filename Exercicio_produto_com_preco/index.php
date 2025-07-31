<?php 

    class Produto {
        public $nome;
        public $preco;

        public function __construct($nome, $preco)
        {
            $this->nome = $nome;
            $this->preco = $preco;   
        }
        public function exibirPreco() {
            echo "O $this->nome custa R$ $this->preco  <br>";
        }
    }

    $alface = new Produto("Alface", 3.99);

    $alface->exibirPreco();  
?>