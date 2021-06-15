<?php

require_once (__DIR__ . "./product.php");

class Smartphone extends Product {
    private $modello;
    private $capacitaMemoria;


    public function __construct($iModello, $iCapacitaMemororia, $prezzo, $marchio)
    {  
        $this->setModello($iModello);
        $this->setCapacitaMemoria($iCapacitaMemororia);
        $this->setMarchio($marchio);
        $this->setPrezzo($prezzo);

    }

    public function setModello ($value) {
        $this->modello = $value;
    }

    public function getModello() {
        return $this->modello;
    }

    public function setCapacitaMemoria($value) {
        $this->capacitaMemoria = $value;
    }

    public function getCapacitaMemoria() {
        return $this->capacitaMemoria;
    }


    //
    public function render() {
        return 
        "<h1>" . "Il modello è: " . $this->modello . "</h1>".
        "<h1>" . "Capacità memoria: " . $this->capacitaMemoria . "</h1>".
        "<h1>" . "Marchio: " . $this->getMarchio() . "</h1>".
        "<h1>" . "Prezzo: " . $this->getPrezzo() . "</h1>";
       
    }

}