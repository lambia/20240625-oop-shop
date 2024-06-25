<?php

class Gioco extends Prodotto {

    public $materiale;

    public function __construct($primoArgomento, $secondoArgomento, Categoria $terzoArgomento, $materiale) 
    {
        $this->nome = $primoArgomento;
        $this->prezzo = $secondoArgomento;
        $this->categoria = $terzoArgomento;

        $this->materiale = $materiale;
    }

}