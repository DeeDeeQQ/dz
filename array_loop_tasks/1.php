<?php
/**
 * 1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.
 */

$array = ['html', 'css', 'js', 'jq'];
foreach ($array as $each) {
    echo "$each <br>";
}