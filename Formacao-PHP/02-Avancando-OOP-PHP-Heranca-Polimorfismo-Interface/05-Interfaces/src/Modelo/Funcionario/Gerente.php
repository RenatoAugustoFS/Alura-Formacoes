<?php

namespace Alura\Banco\Modelo\Funcionario;

Class Gerente extends Funcionario {

    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }

}