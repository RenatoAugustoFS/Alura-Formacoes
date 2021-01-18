<?php 

namespace Alura\Banco\Service;

use Alura\Banco\Interfaces\Autenticavel;

Class Autenticador 
{
    public function tentaLogin(Autenticavel $autenticavel, String $senha): void
    {   
        if($autenticavel->podeAutenticar($senha)) {
            echo "OK - Usuário logado no sistema";
        } else {
            echo "Senha Incorreta";
        }
        
    }    
}