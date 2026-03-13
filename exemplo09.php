<?php

class Filme
{
    public $nome;
    public $saldo;

    function __construct($nome, $saldo)
    {
        $this->nome = $nome;
        $this->saldo = $saldo;
    }

    function incrementSaldo($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }
}

