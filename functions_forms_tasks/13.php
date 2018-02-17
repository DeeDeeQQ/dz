<?php
/**
 * 13. Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня
 * груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко
 * вишня вишня черешня черешня груша яблоко черешня вишня';

    Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите в виде списка в порядке уменьшения количества:

        Пример вывода:
        яблоко – 12
        черешня – 8
        груша – 5
        слива - 3
 */

$string = 'яблоко черешня вишня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
$explodedString = explode(' ',$string);
$counted = array_count_values($explodedString);
arsort($counted, SORT_NUMERIC);

foreach ($counted as $name => $value)
{
    echo "$name - $value </br>";
}