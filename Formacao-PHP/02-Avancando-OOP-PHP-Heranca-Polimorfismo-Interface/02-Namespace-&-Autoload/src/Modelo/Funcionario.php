<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf); 
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function defineNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

}