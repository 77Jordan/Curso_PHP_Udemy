<?php

class Animal
{
    private string $nome;
    private string $som;

    public function __construct(string $nome, string $som)
    {
        $this->setNome($nome);
        $this->setSom($som);
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    public function setSom(string $som): void
    {
        $this->som = $som;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getSom(): string
    {
        return $this->som;
    }

    public function fazerSom(): string
    {
        return $this->som;
    }
}

class Cachorro extends Animal {
    
    public function __construct(string $nome) {
        parent::__construct($nome, "Au Au!"); // Define o som automaticamente
    }

    public function abanarRabo() : string {
        return "abanando rabo";
    }
}

$porco = new Animal("porco", "oinc");

echo "{$porco->fazerSom()} <br>";

$cachorro = new Cachorro("Dog");

echo "{$cachorro->fazerSom()} <br>";
echo "{$cachorro->abanarRabo()} <br>";