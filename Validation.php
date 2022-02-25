<?php

namespace App\Sorteio;

class ValidantionAlert
{

    /**
     * Regras para validar de valores de dezenas informado pelo usuário estão dentro do esperado
     */
    function validarDezena($value)
    {
        return !isset($value) || !$value || $value < 6 || $value > 10;
    }

    /**
     * Regras para validar de valores de bilhetes informado pelo usuário estão dentro do esperado
     */
    function validarBilhete($value)
    {
        return !isset($value) || !$value || $value < 1 || $value > 50;
    }
}
