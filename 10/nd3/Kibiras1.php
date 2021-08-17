<?php 

class Kibiras1 {
    private $akmenuKiekis = 0;
    private static $akmenuKiekisVisuoseKibiruose = 0;

    public function prideti1Akmeni() {
        $this->akmenuKiekis++;
        self:: $akmenuKiekisVisuoseKibiruose++;

    }

    public function pridetiDaugAkmenu(int $kiekis) {
        $this->akmenuKiekis += $kiekis;
        self:: $akmenuKiekisVisuoseKibiruose += $kiekis;
    }

    public function kiekPririnktaAkmenu() {
        return $this->akmenuKiekis;
    }

    public static function geterį() {
        return self::$akmenuKiekisVisuoseKibiruose;
    }
}