<?php

$string1 = 'An American in Paris';
$string2 = 'Breakfast at Tiffany\'s';
$string3 = '2001: A Space Odyssey';
$string4 = 'It\'s a Wonderful Life';

$find = ['A','a','Ą','ą','E','e','Ę','ę','Ė','ė',
'I','i','Į','į','Y','y','O','o','U','u','Ų','ų','Ū','ų'];
echo "$string1 =>";
echo str_replace($find,'',$string1);
echo '<br>';
echo "$string2 =>";
echo str_replace($find,'',$string2);
echo '<br>';
echo "$string3 =>";
echo str_replace($find,'',$string3);
echo '<br>';
echo "$string4 =>";
echo str_replace($find,'',$string4);

