<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Interfaces\Autenticavel;

Class Gerente extends Funcionario implements Autenticavel {

    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '7890';
    }

}