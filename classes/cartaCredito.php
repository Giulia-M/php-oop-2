<?php

class CartaCredito {
    private $numeroCarta;
    private $intestatario;
    

    protected $expiration;
    protected $cvv;
  
    public function __construct($nCarta, $intestatario, $expiration, $cvv)
    {
        $this->numeroCarta = $nCarta;
        $this->intestatario = $intestatario;
        $this->cvv = $cvv;
  
        $this->setExpiration($expiration);

       
    }

    public function getNumero() {
        return $this->numeroCarta;
    }
    public function getIntestatario() {
        return $this->intestatario;
    }

  
    public function setExpiration($value) {
      $date = date_create_from_format("m/Y", $value);
        
      $now = new DateTime();
      if($date < $now) {
          throw new Exception("la carta di credito è scaduta");
      }
      $this->expiration = $date;
    }
  
    public function getExpiration() {
      return date_format($this->expiration, "m/Y");
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