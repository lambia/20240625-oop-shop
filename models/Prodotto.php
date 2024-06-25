<?php

class Prodotto {

    //Attributi aka variabili d'istanza
    public $nome;
    public $prezzo;
    public $categoria;
    
    public $immagine;

    //Costruttore
    public function __construct($primoArgomento, $secondoArgomento, Categoria $terzoArgomento)
    {
        $this->nome = $primoArgomento;
        $this->prezzo = $secondoArgomento;
        $this->categoria = $terzoArgomento;
        
    }

    //Altri metodi
    public function getDescrizione() {

        return "$this->nome è un prodotto della categoria " . $this->categoria?->nome . " ed ha un prezzo di $this->prezzo";

    }

}