<?php
/**
 * 9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba".
 * Ввод текста реализовать с помощью формы.
 */

function flipString($string)
{
   echo strrev($string);

}

if($_POST)
{
    flipString($_POST['firstarea']);
}
?>




<form action="9.php" method="post">
    <textarea name="firstarea"></textarea>
    <button type="submit">Check</button>
</form>
