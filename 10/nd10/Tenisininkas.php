<?php

class Tenisininkas {
    private $vardas;
    private $kamuoliukas =false;
    private static $zaidejas1;
    private static $zaidejas2;
    

    public static function getTenisininkas() {
        if (!isset(self::$zaidejas1)) {
            self::$zaidejas1 = new  Tenisininkas;
            self::$zaidejas1->name('petras');
            return self::$zaidejas1;
        }
        else if (!isset(self::$zaidejas2)) {
            self::$zaidejas2 = new  Tenisininkas;
            self::$zaidejas2->name('jons');
            return self::$zaidejas2;
        }
    }

    private function __construct() {}
    private function __clone() {}


    Public function  arTuriKamuoliuka(): bool {
        return ($this->kamuoliukas) ? true : false;
    }

     Public function perduotiKamuoliuka() {
         if (self::$zaidejas1->arTuriKamuoliuka()) {
             echo '<br>';
             echo '<br>';

             self::$zaidejas1->kamuoliukas = false;
             self::$zaidejas2->kamuoliukas = true;
             var_dump(self::$zaidejas1);
             var_dump(self::$zaidejas2);
             echo '<br>';
             echo '<br>';
         }elseif (self::$zaidejas2->arTuriKamuoliuka()) {
             echo '<br>';
             echo '<br>';
            self::$zaidejas2->kamuoliukas = false;
            self::$zaidejas1->kamuoliukas = true;
             var_dump(self::$zaidejas1);
             var_dump(self::$zaidejas2);
             echo '<br>';
             echo '<br>';

         }
    }

     Public static function zaidimoPradzia() {
        $randomiser = rand(0,1);
        if ($randomiser) {
            self::$zaidejas1->kamuoliukas = true;
            
        } else {
            self::$zaidejas2->kamuoliukas = true;
            
        }
        
         if (self::$zaidejas1->arTuriKamuoliuka()) {
            self::$zaidejas1-> perduotiKamuoliuka();
        } else {
            self::$zaidejas2-> perduotiKamuoliuka();
        }

           if (self::$zaidejas1->arTuriKamuoliuka()) {
            self::$zaidejas1-> perduotiKamuoliuka();
        } else {
            self::$zaidejas2-> perduotiKamuoliuka();
        }

          if (self::$zaidejas1->arTuriKamuoliuka()) {
            self::$zaidejas1-> perduotiKamuoliuka();
        } else {
            self::$zaidejas2-> perduotiKamuoliuka();
        }

    }

    public function name($prop) {
        $this->vardas = $prop;
    } 

    // public function __get($prop) {
    //    return $this->$prop;
    // }



}