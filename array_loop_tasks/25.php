<?php
/**
25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.
 */
for($i = 0; $i < 10; $i++){
    $array[] = rand(-100,100);
}

$max = max($array);
$min = min($array);

foreach ($array as $arr){
    echo "$arr<br>";
}
    echo "<hr>";


echo "Max:$max >> Min:$min <br>";

$maxkey = array_keys($array,$max);
foreach ($maxkey as $key){
    $maxkey = $key;
}
echo "<hr>";
$minkey = array_keys($array,$min);
foreach ($minkey as $key){
    $minkey = $key;
}

$array[$maxkey] = $min;
$array[$minkey] = $max;

foreach ($array as $arr){
    echo "$arr<br>";
}
