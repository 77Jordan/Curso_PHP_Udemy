<?php 

    // Crie uma classe Produto com atributos nome, preco e quantidade. 
    // Crie métodos para adicionarEstoque($qtd) e vender($qtd), garantindo
    // que o estoque nunca seja negativo.
    class Produto {
        public $nome;
        public $preco;
        public $quantidade;
        
        public function __construct($nome, $preco, $quantidade)
        {
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setPreco($preco) {
            $this->preco = $preco;
        }
        public function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }

        public function getNome() {
            return $this->nome;
        }
        public function getPreco() {
            return $this->preco;
        }
        public function getQuantidade() {
            return $this->quantidade;
        }
        
        public function adicionarEstoque($qtd) {
            echo "Produto: " . $this->getNome() . "<br>";
            echo "Quantidade atual: " . $this->getQuantidade() . "<br>";
            $resultado = $qtd + $this->quantidade;
            echo "Quantidade adicionada: $qtd <br>";
            echo "Estoque após adição de $qtd: $resultado itens <br>";
        }
        public function vender($qtd) {
            $resultado = $qtd - $this->quantidade;
            if($qtd > $this->quantidade) {
                echo "Não é possivel vender esta quantidade";
            }
            else {echo $resultado;
            }
        }
    }

    $alface = new Produto("Alface", 1.99, 30);
    $alface->adicionarEstoque(30);
    $alface
?>