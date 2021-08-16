<?php

class Piniginė {
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti(int $kiekis) {
        if ($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;
        }else {
            $this->metaliniaiPinigai += $kiekis;
        }

    }

    public function skaiciuoti():int {
        $sum = $this->metaliniaiPinigai + $this->popieriniaiPinigai;
        return $sum;
    }

}