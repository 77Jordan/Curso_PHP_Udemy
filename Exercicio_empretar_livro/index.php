<?php 

    class Livro {
        public $titulo;
        public $autor;
        public $disponivel;
        
        public function __construct($titulo, $autor, $disponivel=true)
        {
            $this->titulo = $titulo;   
            $this->autor = $autor;   
            $this->disponivel = $disponivel;   
        }
        
        public function emprestar() 
        {
            if(!$this->disponivel) {
                echo "O livro não está disponivel <br>";
            }
            else {
                $this->disponivel = false;
                echo "Livro emprestado com sucesso <br>";
            }
        }
        public function devolber() 
        {
            if($this->disponivel == true) {
                echo "Ja esta na biblioteca <br>";
            }
            else {
                echo "devolvido com sucesso <br>";
            }
        }
        public function exibirDetalhes() {     
            $status = $this->disponivel ? "Disponível" : "Emprestado";
            echo "Título: {$this->titulo} <br>";
            echo "Autor: {$this->autor} <br>";
            echo "Status: $status <br>";
        }
    }

    $Jordi = new Livro("Meus padrinhos magicos", "Jordinho");
    
    $Jordi->exibirDetalhes();

    $Jordi->emprestar();
    $Jordi->emprestar();
    $Jordi->exibirDetalhes();
?>