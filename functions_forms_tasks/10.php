<?php
/**
 * 10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами.
 * Текст должен вводиться с формы.
 */

function uniqueWords($string)
{
    if(!empty($string))
    {
        $array = explode(' ', $string);
        echo count(array_unique($array));
    }
}

if($_POST)
{
    uniqueWords($_POST['firstarea']);
}
?>




<form action="10.php" method="post">
    <textarea name="firstarea"></textarea>
    <button type="submit">Check</button>
</form>
