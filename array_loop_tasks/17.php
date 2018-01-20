<?php
/**
17.Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.
 */

$months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$month = getdate();

foreach ($months as $months){
    if($months==$month["month"]){
        echo "<b> $months </b> <br>";
    } else {
    echo "$months <br>";
    }
}