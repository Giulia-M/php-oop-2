<?php

class Product {
    protected $marchio;
    protected $prezzo;

    public function setMarchio ($value) {
        $this->marchio = $value;
    }

    public function getMarchio() {
        return $this->marchio;
    }

    public function setPrezzo($value) {
        $this->prezzo = $value;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

}

