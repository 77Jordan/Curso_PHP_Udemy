<?php

class ContaBancaria
{
    private $titular;
    private $saldo;

    public function __construct($titular, $saldo)
    {
        $this->setTitular($titular);
        $this->setSaldo($saldo >= 0 ? $saldo : 0); // Garante que o saldo inicial não seja negativo
    }

    public function setTitular($titular)
    {
        $this->titular = $titular;
    }

    public function getTitular()
    {
        return $this->titular;
    }

    public function setSaldo($saldo)
    {
        if ($saldo >= 0) {
            $this->saldo = $saldo;
        }
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function depositar($valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ $valor realizado com sucesso!<br>";
        } else {
            echo "Valor inválido para depósito.<br>";
        }
    }

    public function sacar($valor)
    {
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo -= $valor;
            echo "Saque de R$ $valor realizado com sucesso!<br>";
        } else {
            echo "Saldo insuficiente ou valor inválido para saque.<br>";
        }
    }
}

// Criando a conta de Jordinho
$jordinho = new ContaBancaria("Jordinho", 3000);

// Exibindo saldo inicial
echo "Saldo inicial: R$ " . $jordinho->getSaldo() . "<br>";

// Testando depósito
$jordinho->depositar(100);
echo "Saldo após depósito: R$ " . $jordinho->getSaldo() . "<br>";

// Testando saque
$jordinho->sacar(500);
echo "Saldo após saque: R$ " . $jordinho->getSaldo() . "<br>";

// Tentando sacar um valor maior que o saldo
$jordinho->sacar(5000);
?>