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

$prodottoProva = new Prodotto(12.50, 'Padella', 'Ottima per omelette', 'AB123');
var_dump($prodottoProva);

/*
class Prodotto {
    //attributi
    protected $titolo;
    protected $autore;
    protected $isbn;
    protected $prezzo;

    //costruttore

    public function __construct($_titolo, $_autore, $_isbn, $_prezzo)
    {
        $this->titolo = $_titolo;
        $this->autore = $_autore;
        $this->isbn = $_isbn;
        $this->prezzo = $_prezzo;
    }

    //metodi
    public function getTitolo()
    {
        return $this->titolo;
    }
}

class Manuale extends Libro {
    protected $argomento;

    //costruttore
    public function __construct($_titolo, $_autore, $_isbn, $_prezzo, $_argomento)
    {
        // $this->titolo = $_titolo;
        // $this->autore = $_autore;
        // $this->isbn = $_isbn;
        // $this->prezzo = $_prezzo;

        parent:: __construct($_titolo, $_autore, $_isbn, $_prezzo);
        $this->argomento = $_argomento;
    }
}

*/
?>
