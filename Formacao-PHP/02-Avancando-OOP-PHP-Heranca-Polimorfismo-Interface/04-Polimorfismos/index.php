<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF, Endereco};
use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};

$endereco = new Endereco('Duque De Caxias', 'Pilar', 'Deise', 'SN');

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new ContaCorrente($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new ContaCorrente($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('Petropolis', 'Petropin', 'Petrupia', '00');
$outroTitular = new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco);
$outra = new ContaCorrente($outroTitular);
unset($segundaConta);
echo ContaCorrente::recuperaNumeroDeContas();
