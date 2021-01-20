<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Interfaces\Autenticavel;

Class Diretor extends Funcionario implements Autenticavel {

    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(String $senha): bool
    {
        return $senha === '1234';
    }

}