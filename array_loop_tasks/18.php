<?php
/**
18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.
 */

$week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

foreach ($week as $day){
    if($day=='Sunday'||$day=='Saturday'){
        echo "<b>$day</b> </br>";
    } else {
    echo "$day </br>";
    }
}