<?php
/**
 *   4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
 */


function getFilesList($dir)
    {
       $filesList = scandir($dir);
        echo "<pre>";
        print_r($filesList);
        echo "</pre>";

    }

if($_POST)
{
    getFilesList($_POST['firstarea']);
}
?>
<form action="4.php" method="post">
    <textarea name="firstarea"></textarea>
    <button type="submit">Check</button>
</form>
