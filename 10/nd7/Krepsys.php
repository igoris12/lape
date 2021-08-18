<?php

class Krepsys {
    private $dydis=500;
    public $kiekis=0;
    
    public function deti($grybas) {
        if ($grybas->valgomas && !$grybas->sukirmijes) {
            $this->kiekis  += $grybas->svoris;
        }
    }

    public function __get($prop) {
        return $this->$prop;
    }
} 