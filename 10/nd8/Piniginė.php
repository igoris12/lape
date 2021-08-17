<?php

class Piniginė {
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;
    private $monetos=0;
    private $banknotai=0;

    public function ideti(int $kiekis) {
        if ($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;
            $this->banknotai++;
        }else {
            $this->metaliniaiPinigai += $kiekis;
            $this->monetos++;
        }

    }

    public function skaiciuoti():int {
        $sum = $this->metaliniaiPinigai + $this->popieriniaiPinigai;
        return $sum;
    }

    public function monetos():int {
        return $this->monetos;
    }

     public function banknotai():int {
        return $this->banknotai;
         
     }

}