<?php
/**
27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
 * Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
 * Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки
 * будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.
 */

$row = rand(1,10);
$cols = rand (1,10);
$colors = ['red','yellow','blue','gray','maroon','brown','green'];

echo "<table><tbody>";
for($i=0; $i<$row ;$i++){
    echo "<tr>";
    for($j=0; $j<$cols; $j++){
        $color = rand(0,6);
        $num = rand();
        echo "<td style=\"background-color:$colors[$color]\">$num </td>";
        }
     echo "</tr>";
}
echo "</tbody></table";