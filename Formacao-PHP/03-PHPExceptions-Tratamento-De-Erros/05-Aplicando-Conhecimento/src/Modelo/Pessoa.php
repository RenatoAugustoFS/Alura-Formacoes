<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Traits\AcessoPropriedades;
use Alura\Banco\Modelo\NomePessoaInvalidoException;

abstract class Pessoa
{
    use AcessoPropriedades;

    protected string $nome;
    protected CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            throw new NomePessoaInvalidoException($nome);
        }
    }

}