<?php

namespace App\Sorteio;

use App\Sorteio\ValidantionAlert;

require("Validation.php");

class RedirectValidation extends ValidantionAlert
{

    /**
     * Função para redirecionar usuário para tela de inserção de dados caso tenha preenchido incorretamente
    */
    public function redirectAlert($dezenas, $bilhetes)
    {
        if ($this->validarDezena($dezenas) || $this->validarBilhete($bilhetes)) {
            header(
                'Location: http://' .
                    $_SERVER['HTTP_HOST'] .
                    '/parte1.php?' .
                    ($this->validarDezena($dezenas) ? 'alert_dezena' : 'alert_bilhete')
            );
        }
    }
}
