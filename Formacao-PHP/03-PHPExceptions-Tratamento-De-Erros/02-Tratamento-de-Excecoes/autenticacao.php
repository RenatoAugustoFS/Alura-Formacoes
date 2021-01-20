<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Gerente;

$auth = new Autenticador();

$umDiretor = new Diretor('João', new CPF('123.456.789-35'), 5000);
$auth->tentaLogin($umDiretor, '1234');

$cpf = new CPF('123.456.789-35');
$umTitular = new Titular($cpf, 'Renato', new Endereco('Caxias', 'Pilar', 'Deise', '20'));
$auth->tentaLogin($umTitular, '4567');

$umGerente = new Gerente('João', new CPF('123.456.789-35'), 5000);
$auth->tentaLogin($umGerente, '7890');
