<?php

namespace Alura\Banco\Modelo\Funcionario;

Class Desenvolvedor extends Funcionario{

    public function sobeDeNivel(): void
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }

}