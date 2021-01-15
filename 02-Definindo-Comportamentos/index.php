<?php

require "src/Conta.php";

$conta = new Conta();

$conta->cpfTitular = ('123-456-789-10');
$conta->nomeTitular = ('Renato');
$conta->depositar(500);


$conta2 = new Conta();

$conta2->cpfTitular = ('123-456-789-10');
$conta2->nomeTitular = ('Renato2');
$conta2->depositar(5000);

$conta->transferir(400, $conta2);



var_dump($conta2);