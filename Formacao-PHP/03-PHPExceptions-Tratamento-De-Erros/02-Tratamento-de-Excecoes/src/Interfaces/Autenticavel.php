<?php

namespace Alura\Banco\Interfaces;

interface Autenticavel {

    public function podeAutenticar(String $senha): bool;

}

