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

class Prodotto_Categoria extends Prodotto {
    protected $categoria;

    //costruttore
    public function __construct($_prezzo, $_nome, $_descrizione, $_codice, $_categoria)
    {
        parent:: __construct($_prezzo, $_nome, $_descrizione, $_codice);
        $this->categoria = $_categoria;

    }

}
?>
