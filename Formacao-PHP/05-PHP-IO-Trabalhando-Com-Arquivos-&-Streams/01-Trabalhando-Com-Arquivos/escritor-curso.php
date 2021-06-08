<?php

/*
$arquivo = fopen('cursos-php.txt', 'w');

$curso = 'Design Patterns PHP I: Boas práticas de programação';

fwrite($arquivo, $curso, 21);

fclose($arquivo);
*/

/*
$arquivo = fopen('cursos-php.txt', 'a');

$curso = "\nDesign Patterns PHP II: Boas práticas de programação";

fwrite($arquivo, $curso);

fclose($arquivo);
*/

/*
$curso = "Design Patterns PHP I: Boas práticas de programação";

file_put_contents('cursos-php.txt', $curso);
*/

$curso = "Design Patterns PHP II: Boas práticas de programação";

file_put_contents('cursos-php.txt', $curso, FILE_APPEND); //FILE_APPEND é uma flag que sinaliza pra função adicionar ao arquivo e nao sobrescrever


