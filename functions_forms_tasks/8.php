<?php
/**
 * 8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем. Реализовать проверку на наличие в тексте запрещенных слов,
 * матов. При наличии таких слов - выводить сообщение "Некорректный комментарий". Реализовать удаление из комментария
 * всех тегов, кроме тега <b>.
 */
function deleteHtml($comment)
{
    return strip_tags($comment,'<b>');
}

function getComment($dir, $comment)
{
    $filename = getUniqueFileName($dir, 'txt');
    $badwords = ['fuck', 'whore', 'suck'];
    foreach ($badwords as $word) {
        if (stristr($comment, "$word") == TRUE) {
            echo "Не корректный комментарий";
            die;
        }
    }
    file_put_contents($filename, deleteHtml($comment));
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


<form action="8.php" method="post">
    <textarea name="comment" placeholder="Your comment"></textarea>
    <button type="submit">Check</button>
</form>