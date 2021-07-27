<?php


$content = '';
for ($i =0; $i <100; $i++) {
    for ($j =0; $j <100; $j++) {
        $content .= "<p style='display: inline-block; margin:0; margin-right:9px; font-size: 5px; 
         >*</p>";
    }
    $content .= '<br>';
}

echo "<div style='display: inline-block;' >$content</div>";
    

