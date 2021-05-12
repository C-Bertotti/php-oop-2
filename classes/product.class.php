<?php

class Prodotto {
    //attrubuti
    protected $prezzo;
    protected $nome;
    protected $descrizione;
    protected $codice;


    //costruttore
    public function __construct($_prezzo, $_nome, $_descrizione, $_codice)
    {
        $this->prezzo = $_prezzo;
        $this->nome = $_nome;
        $this->descrizione = $_descrizione;
        $this->codice = $_codice;
    }

}


?>
