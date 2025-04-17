<?php

class Pessoa
{
    private string $nome;
    private int $idade;
    private string $email;

    public function __construct(string $nome, int $idade, string $email)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setEmail($email);
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function exibirDados(): string
    {
        return "Nome: {$this->getNome()} <br> Idade: {$this->getIdade()} <br>E-mail: {$this->getEmail()}";
    }
}

$jordan = new Pessoa("Jordan", 24, "jordangaldino@gmail.com");

echo "{$jordan->getIdade()} <br>";
$jordan->setIdade(29);
echo "{$jordan->getIdade()} <br>";
echo "{$jordan->exibirDados()} <br>";

echo "<br><br>";

$mama = new Pessoa("Maciel", 24, "lucasmaciel22@gmail.com");

echo "{$mama->getIdade()} <br>";
$mama->setIdade(21);
echo "{$mama->getIdade()} <br>";
echo "{$mama->exibirDados()} <br>";