<?php

require 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor, EditorDeVideo};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\ControladorDeBonificacoes;

$cpf = new CPF('123.456.789-35');
$funcionario = new Gerente('Renato', $cpf, 14000);

$funcionario2 = new Desenvolvedor('Renato2', $cpf, 20000);
$funcionario2->sobeDeNivel();

$funcionario3 = new EditorDeVideo('Renato3', $cpf, 5000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($funcionario);
$controlador->adicionaBonificacao($funcionario2);
$controlador->adicionaBonificacao($funcionario3);
echo $controlador->recuperaTotal();
