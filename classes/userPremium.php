<?php 

require_once (__DIR__ . "./user.php");
require_once (__DIR__ . "./cartaCredito.php");


class UserPremium extends User {
 
    private $scontiEsclusivi;
    


    function __construct($iNome, $iCognome, $iSconti, $email, $eta)
    {
        parent::__construct($iNome, $iCognome, $email, $eta);
        $this->setScontiEsclusivi($iSconti);
    }


    public function setScontiEsclusivi($value) {
        $this->scontiEsclusivi= $value;
    }

    public function getScontiEsclusivi() {
        return $this->scontiEsclusivi;
    }

    public function render() {
        return 
        "<span>" . "Nome dell'intestatario è : " . $this->getNome() . "</span> <br>".
        "<span>" . "Cognome dell'intestatario è : " . $this->getCognome(). "</span> <br>" .
        "<span>" .  "Carta di Credito è : " . $this->getCarteDiCredito()[0]->getNumero() . "</span> <br>".
        "<span>" .  "data di scadenza : " . $this->getCarteDiCredito()[0]->getExpiration() . "</span> <br>".
        "<span>" .  "email  : " . $this->getEmail() . "</span> <br>".
        "<span>" .  "eta : " . $this->getEta() . "</span> <br>";
        

       
    }

}