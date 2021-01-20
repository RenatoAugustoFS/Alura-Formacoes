<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;

require_once 'autoload.php';

$cpf = new CPF('123.456.789-35');
$endereco = new Endereco('Caxias', 'Pilar', 'Deise', '10');
$titular = new Titular($cpf, 'Renato', $endereco);
$conta = new ContaCorrente($titular);

try {
    $conta->deposita(-500);
} catch (Exception $exception) {
    echo 'Valor a depositar precisa ser positivo';
}

echo $conta->recuperaSaldo();