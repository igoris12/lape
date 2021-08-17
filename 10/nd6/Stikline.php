<?php

class Stikline {
    private  $turis;
    private  $kiekis = 0;

    public function __construct($turis) {
        $this->turis = $turis;
    }

   public function ipilti($kiekis) {
       if ($this->turis < $kiekis) {
           $this->kiekis =  $this->turis;
       }else {
           $this->kiekis =  $kiekis;
       }
   }

   public function ispilti() {
       $this->kiekis = 0;
   }

   public function __get($prop) {
       return $this->$prop; 
   }
}