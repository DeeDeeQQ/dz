<?php
/**
 * 7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем.
 */

function getComment($dir, $comment)
{
    $filename = getUniqueFileName($dir,'txt');
    file_put_contents($filename,$comment);
}

function getUniqueFileName($dir, $fileExt)
{
    $i = 0;
    do {
        $i++;
        $hash = "File_{$i}";
        $name = "{$hash}.{$fileExt}";
    } while (file_exists("{$dir}/{$name}"));
    return "{$dir}/{$name}";
}

function view($dir, $filesList){
    foreach ($filesList as $file)
    {
        if(!stripos($file,'.') == 0)
        {
            $text = file_get_contents("{$dir}{$file}");
            echo "$text <hr>";
        }
    }
}

$dir = __DIR__ . '/comments/';
if($_POST)
{
    getComment($dir,$_POST['comment']);
}
$filesList = scandir($dir);
if($filesList)
{
    view($dir, $filesList);
}

?>


<form action="7.php" method="post">
    <textarea name="comment" placeholder="Your comment"></textarea>
    <button type="submit">Check</button>
</form>