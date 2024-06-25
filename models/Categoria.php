<?php

class Categoria {

    public $nome;
    public $descrizione;
    public $icona;

    public function __construct($nomeCategoria, $descrizione)
    {
        $this->nome = $nomeCategoria;
        $this->descrizione = $descrizione;
    }

}