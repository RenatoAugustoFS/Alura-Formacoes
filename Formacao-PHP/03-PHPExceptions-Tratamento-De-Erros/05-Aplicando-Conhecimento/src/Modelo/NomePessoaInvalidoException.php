<?php

namespace Alura\Banco\Modelo;

use DomainException;

Class NomePessoaInvalidoException extends DomainException 
{
    public function __construct($nome)
    {
        $message = "O nome que você tentou utilizar $nome, 
        tem menos de 5 letras. Por favor utilize um nome válido" . PHP_EOL;
        parent::__construct($message);
    }
}