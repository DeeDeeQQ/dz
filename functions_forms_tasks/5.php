<?php
/**
 * 5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
 * Директория и искомое слово задаются как параметры функции.
 */

function getFilesList($dir, $foundWord)
{
    $resultList = [];
    $filesList = scandir($dir);

    foreach ($filesList as $file)
    {
        if(!stripos($file,'.') == 0)
        {
            $filePath = $dir . '/' .  $file;
            if (strpos(file_get_contents("$filePath"), $foundWord))
            {
                $resultList[] = $file;
            }
        }
    }
    echo "<pre>";
    print_r($resultList);
    echo "</pre>";

}

if($_POST)
{
    getFilesList($_POST['url'], $_POST['foundword']);
}
?>
<form action="5.php" method="post">
    <textarea name="url" placeholder="Directory"></textarea>
    <textarea name="foundword" placeholder="Word exist"></textarea>
    <button type="submit">Check</button>
</form>
