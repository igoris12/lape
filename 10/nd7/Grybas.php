<?php

class Grybas {
    private bool $valgomas;
    private bool $sukirmijes;
    private $svoris;

    public function __construct() {
        $this->valgomas = (rand(0,1)) ? true : false;
        $this->sukirmijes = (rand(0,1)) ? true : false;
        $this->svoris = rand(5, 45);
    }

    public function __get($prop) {
        return $this->$prop;
    }

}