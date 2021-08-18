<?php

require __DIR__ .'/Krepsys.php';
require __DIR__ .'/Grybas.php';


echo '<pre>';
$krepsys = new Krepsys;


do {
    
    $grybas = new Grybas;
    print_r($grybas);
    
        $krepsys->deti($grybas);
   
} While($krepsys->kiekis < $krepsys->dydis);






// print_r($grybas);
print_r($krepsys);