<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

$endereco = new Endereco('Caxias', 'Pilar', 'Deise', '27');
$cpf = new CPF('123.456.789-10');
$nome = 'Renato';
$titular = new Titular($cpf, $nome, $endereco);
$conta = new ContaCorrente($titular);

$conta->deposita(100);
$conta->saca(10);

//$conta->transfere(10, $conta);

echo $conta->recuperaSaldo();