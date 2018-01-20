<?php
/**
19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
 */
$week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

$day = getdate();

foreach ($week as $days){
    if($days == $day["weekday"]){
        echo "<i>$days</i> <br>";
    } else {
        echo "$days <br>";
    }
}