<?php

class MarsoPalydovas {
    private $title;
    private static $objectsNumber = [];


    public static function getMarsoPalydovas() {
       (bool) $random = rand(0,1);

        if (!isset(self::$objectsNumber[0])) {
            self::$objectsNumber[0] = new self;
           self::$objectsNumber[0]->title('Deimas');
            return self::$objectsNumber[0];

        }else if (!isset(self::$objectsNumber[1])) {
            self::$objectsNumber[1] = new self;
            self::$objectsNumber[1]->title('Fobas');
            return self::$objectsNumber[1];
        }else {
            return ($random) ?  self::$objectsNumber[1] :  self::$objectsNumber[0];
        }
    }

    public function title($prop):void {
        $this->title = $prop;
    }

    private function __construct() {}
    private function __clone(){}
    // private function __sleep(){}
    // private function __wakeup(){}
} 