<?php

class CartaCredito {
    private $numeroCarta;
    private $intestatario;
    public function __construct($nCarta, $intestatario)
    {
        $this->numeroCarta = $nCarta;
        $this->intestatario = $intestatario;

       
    }

    public function getNumero() {
        return $this->numeroCarta;
    }
    public function getIntestatario() {
        return $this->intestatario;
    }
}
/*
class Carrello {
    private $user;
    private $products;

    public function __construct($user) {
        $this->user = $user;
        $this->products = [];
    }

    public function aggiungiProdotto($prodotto) {
        $this->products[] = $prodotto;
    }

    //total()??

    // render()
}

$u = new User("a");
$carrello = new Carrello($u);
$p1 = new Smartphone("");

$p2 = new Smartphone();

$carrello.aggiungiProdotto($p1);
$carrello.aggiungiProdotto($p2);

$carrello.render();
*/