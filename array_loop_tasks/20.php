<?php
/**
20.Нарисуйте пирамиду,
x
xx
xxx
xxxx
xxxxx
 */
$i=0;
$a = 'x';
while ($i<20) {
    echo "$a <br>";
    $a = $a . 'x';
    $i++;
}