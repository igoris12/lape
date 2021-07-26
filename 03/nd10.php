<?php

function stringRender ($length) {
    $characters = 'qwertyuiopasdfghjklzxcvbnm';
    $charactersLenght = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString.= $characters[rand(0, $charactersLenght-1)];
    }
return   $randomString;
}

echo stringRender(3);