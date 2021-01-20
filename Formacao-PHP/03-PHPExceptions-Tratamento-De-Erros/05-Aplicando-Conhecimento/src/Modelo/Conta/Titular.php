<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Interfaces\Autenticavel;
use Alura\Banco\Modelo\{Pessoa, CPF, Endereco};

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf); 
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(String $senha): bool
    {
        return $senha === '4567';
    }

}
