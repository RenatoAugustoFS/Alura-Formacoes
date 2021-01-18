<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco('Caxias', 'Pilar', 'Deise', '20');
$enderecoDois = new Endereco('RJ', 'Nobrega', 'DAHSU', '21');
$enterecoTres = new Endereco('Mage', 'Piabeta', 'ubay', 'A55');


echo $enderecoDois->rua;
