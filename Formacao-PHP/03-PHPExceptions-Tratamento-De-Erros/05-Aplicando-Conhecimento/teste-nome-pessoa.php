<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\{CPF, Endereco, NomePessoaInvalidoException};

try {
    $titular = new Titular(
        new CPF('123.567.789-10'), 
        'Rena',
        new Endereco('Caxias', 'Pilar', 'Nice', 10)
    );
} catch (NomePessoaInvalidoException $exception) {
    echo $exception->getMessage();
}

