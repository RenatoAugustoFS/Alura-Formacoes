<?php

namespace Alura\Banco\Traits;

Trait AcessoPropriedades
{
    public function __set(string $nomeAtributo, string $valor): void
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        $this->$metodo = $valor;
    }
}