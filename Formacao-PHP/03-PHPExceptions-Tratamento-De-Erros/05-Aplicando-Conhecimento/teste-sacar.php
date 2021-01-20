<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF, Endereco};
use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, SaldoInsuficienteException, Titular};

$endereco = new Endereco('Caxias', 'Pilar', 'Deise', '27');
$cpf = new CPF('123.456.789-10');
$nome = 'Renato';
$titular = new Titular($cpf, $nome, $endereco);
$conta = new ContaCorrente($titular);

$conta->deposita(100);

try {
    $conta->saca(1000);
} catch (SaldoInsuficienteException $exception) {
    echo $exception->getMessage();
}


//$conta->transfere(10, $conta);

echo $conta->recuperaSaldo();