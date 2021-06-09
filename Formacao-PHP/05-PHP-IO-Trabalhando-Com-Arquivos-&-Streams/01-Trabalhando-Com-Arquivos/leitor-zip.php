<?php

/*
Alguns Wrappers
FTP
FILE
SSH2
HTTP(s)
ZIP
PHP
etc...
*/

$arquivo = file_get_contents('zip://arquivos.zip#lista-cursos.txt');

var_dump($arquivo);