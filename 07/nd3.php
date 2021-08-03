<?php

$sting = md5(time());
echo '<br>';
echo $sting;
echo '<br>';
echo '<pre>';


echo '<br>';
echo func($sting);

function func ($prop) {
    $lookFor = $re = '/[0-9]{1,}/m';
    $str = $prop;
    
    preg_match_all($re, $str, $matches,PREG_SET_ORDER, 0);
    
    // Print the entire match result
    foreach ($matches as $key) {
        foreach ($key as $value) {
            echo "<h1>$value</h1>";
        }
    }
}

