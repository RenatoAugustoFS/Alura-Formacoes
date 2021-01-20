<?php

namespace Alura\Banco\Modelo\Conta;

use DomainException;

Class SaldoInsuficienteException extends DomainException 
{
    public function __construct(float $valorSaque, float $valorAtual)
    {
        $message = "Você tentou sacar $valorSaque, mas tem apenas $valorAtual em conta" . PHP_EOL;
        parent::__construct($message);
    }
}