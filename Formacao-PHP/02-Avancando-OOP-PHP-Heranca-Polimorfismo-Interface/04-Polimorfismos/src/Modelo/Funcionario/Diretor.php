<?php

namespace Alura\Banco\Modelo\Funcionario;

Class Diretor extends Funcionario {

    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(String $senha): bool
    {
        return $senha === '1234';
    }

}