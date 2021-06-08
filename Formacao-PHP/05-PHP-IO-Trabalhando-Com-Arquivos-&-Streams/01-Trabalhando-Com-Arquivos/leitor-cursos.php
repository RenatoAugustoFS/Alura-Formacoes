<?php

/*
$arquivo = fopen('lista-cursos.txt', 'r');

while (!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso . PHP_EOL;
}

fclose($arquivo);
*/

/*
$arquivo = fopen('lista-cursos.txt', 'r');

$tamanhoDoArquivo = filesize('lista-cursos.txt');
$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);
*/


$cursos = file('lista-cursos.txt'); //File joga os itens do arquivo para um formato de array com indices
var_dump($cursos);


//Para arquivos pequenos usamos a segunda abordagem, para arquivos muito grandes usamos a primeira abordagem
//tudo isso porque o PHP não aceita por padrão mais de 128MB alocados em memória de uma só vez