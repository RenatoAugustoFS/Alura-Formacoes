<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\{CPF, Endereco};

try {
    $titular = new Titular(
        new CPF('123.56.789-10'), 
        'Renato',
        new Endereco('Caxias', 'Pilar', 'Deise', 10)
    );
} catch (InvalidArgumentException $exception) {
    echo "CPF inválido";
}
