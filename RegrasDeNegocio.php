<?php

namespace App\Sorteio\Controllers;

class RegrasDeNegocio
{
    public $dezenas;
    public $bilhetes;
    public $sorteios;

    function __construct(int $dezenas, int $bilhetes)
    {
        $this->bilhetes = $bilhetes;
        $this->dezenas = $dezenas;
    }

    public function criarBilhetes()
    {
        $this->sorteios = [];

        for ($i = 0; $i < $this->bilhetes; $i++) {
            $this->sorteios[$i] = $this->criarDezenas($this->dezenas);
        }
    }

    public function criarDezenas($quantidade)
    {
        $result = [];

        for ($i = 0; $i < $quantidade; $i++) {
            $numero = rand(1, 60);
            while (in_array($numero, $result)) {
                $numero = rand(1, 60);
            }
            $result[$i] = $numero;
        }

        sort($result, SORT_NUMERIC);

        return $result;
    }
}
