<?php
/**
22. Нарисуйте пирамиду,

xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
 */
$a = 'xx';
for ($i=0; $i<5; $i++){
    echo "$a <br>";
    $a = $a . 'xx';
}