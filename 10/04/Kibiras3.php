<?php 

class Kibiras3 {
    private $akmenuKiekis = 0;

    public function prideti1Akmeni() {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu(int $kiekis) {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu() {
        return $this->akmenuKiekis;
    }
}