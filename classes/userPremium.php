<?php 

require_once (__DIR__ . "./user.php");

class UserPremium extends User {
 
    private $scontiEsclusivi;


    function __construct($iNome, $iCognome, $iSconti )
    {
        parent::__construct($iNome, $iCognome);
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
        "<span>" . "Cognome dell'intestatario è : " . $this->getCognome(). "</span> <br>";
        // "<span>" .  "Carta di Credito è : " . $this->aggiungiCartaCredito("1") . "</span>";
       
    }

}