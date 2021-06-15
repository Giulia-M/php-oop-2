<?php

class User {
    private $nome;
    private $cognome;
    private $carteDiCredito; 

    public function __construct($iNome, $iCognome)
    {
        $this->nome = $iNome;
        $this->cognome = $iCognome;
        $this->carteDiCredito = [];
       
    }

    public function setNome ($value) {
        $this->nome = $value;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setCognome($value) {
        $this->cognome = $value;
    }

    public function getCognome() {
        return $this->cognome;
    }
    
/*
    public function setCartaCredito($value) {
        $this->carteDiCredito = $value;
    }

    public function getCartaCredito() {
        return $this->carteDiCredito;
    }
*/
    public function aggiungiCartaCredito($addCartaCredito) {
        $this->carteDiCredito[] = $addCartaCredito;
    }

    

    
}


