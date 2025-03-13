<?php 

class ContaBancaria {

    private $titular;
    private $saldo;

    public function __construct($titular, $saldoInicial = 0)
    {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;

            echo "Valor de R$ $valor depoistado! <br>";
        } else {
            echo "Valor indisponivel para depósito! <br>";
        }
    }
    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Valor de R$ $valor sacado! <br>";
        } else {
            echo "Valor de $valor indisponivel para saque <br>";
        }
    }
    public function getSaldo() {
        echo "O saldo atual é de R$ $this->saldo <br>";
    }
    public function getTitular() {
        echo "O nome do titular é: $this->titular <br>";
    }
}

    $jordan = new ContaBancaria("Jordan", 1000);
    
    $jordan->getTitular();
    $jordan->depositar(100);
    $jordan->depositar(200);
    $jordan->depositar(300);
    $jordan->depositar(400);
    $jordan->depositar(500);
    
    $jordan->getSaldo();
    
    $jordan->sacar(3000);

    $jordan->sacar(2000);

    $jordan->getSaldo();
?>