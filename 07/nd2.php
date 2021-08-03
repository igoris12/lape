<?php

function func (String $a, int $b = 1) {
    return "<h$b>$a</h$b>";
}

echo func('works!' ).'<br>';
echo func('works!' ,6).'<br>';
echo func('works!' ,5).'<br>';
echo func('works!' ,3).'<br>';
echo func('works!' ,2).'<br>';
echo func('works!' ,1).'<br>';