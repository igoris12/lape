<?php


function getAccount() {
    return json_decode(file_get_contents(__DIR__.'/DuomenųBazė.json'));
}

function setAccount($info): void {
    $array = getAccount();
    $array[] = $info;


    file_put_contents(__DIR__.'/DuomenųBazė.json',json_encode($array));
 }

 ?>
