<?php

require 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\ControladorDeBonificacoes;

$cpf = new CPF('123.456.789-35');
$funcionario = new Gerente('Renato', $cpf , 'Analista', 14000);

$funcionario2 = new Desenvolvedor('Renato2', $cpf , 'Analista', 20000);
$funcionario2->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($funcionario);
$controlador->adicionaBonificacao($funcionario2);
echo $controlador->recuperaTotal();
