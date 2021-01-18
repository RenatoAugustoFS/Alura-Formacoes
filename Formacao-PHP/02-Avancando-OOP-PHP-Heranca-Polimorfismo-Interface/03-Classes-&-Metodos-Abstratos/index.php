<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$endereco = new Endereco('Duque De Caxias', 'Pilar', 'Deise', 'SN');

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('Petropolis', 'Petropin', 'Petrupia', '00');
$outroTitular = new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco);
$outra = new Conta($outroTitular);
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
