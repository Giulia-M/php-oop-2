<?php

class User {
    protected $nome;
    protected $cognome;
    protected $email;
    protected $carteDiCredito; 
    protected $eta;

    public function __construct($iNome, $iCognome, $email, $eta)
    {
        $this->setNome($iNome);
        $this->setCognome($iCognome);
        $this->carteDiCredito = [];
        $this->setEmail($email);
        $this->setEta($eta);
    }

    public function setNome($value) {
       
        if (!is_string($value)) {
            throw new Exception ("il nome inserito non è valido");
        }
        $this->nome = $value;

    }

    public function getNome() {
        return $this->nome;
    }

    public function setCognome($value) {
        if (!is_string($value)) {
            throw new Exception ("il cognome inserito non è valido");
        }
        $this->cognome = $value;
    }

    public function getCognome() {
        return $this->cognome;
    }


    public function setCarteDiCredito($value) {
        $this->carteDiCredito = $value;
    }

    public function getCarteDiCredito() {
        return $this->carteDiCredito;
    }


    public function aggiungiCartaCredito($addCartaCredito) {
        $this->carteDiCredito[] = $addCartaCredito;
    }

    public function setEmail($value) {
        if (!strstr($value, "@")) {
            throw new Exception ("l'email inserita non è valida");
        }
        $this->email = $value;

    }

    public function getEmail() {
        return $this->email;
    }

    public function setEta($value) {
        if (!is_int($value)) {
            throw new Exception ("l'età non è valida");
        }
        $this->eta = $value;
    }

    public function getEta() {
        return $this->eta;
    }

    

    
}


