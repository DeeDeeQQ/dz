<?php
/**
 * 3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать через форму.
 * Проверить работу на кириллических строках - найти ошибку, найти решение.
 */
function deleteWords($text,$n=4)
{
    $words = explode(' ',$text);
    $newFile = '';
    foreach ($words as $word)
    {
        if(mb_strlen($word,"UTF-8") > $n) {
        } else {
            $newFile .= "$word ";
        }

    }
    $convertedText = mb_convert_encoding($newFile,"utf-8");

    echo "$convertedText";
}

if($_FILES)
{
    $filedata = $_FILES['file'];
    $file = file_get_contents("{$filedata['tmp_name']}");
    deleteWords($file,$_POST['n']);
}
?>

<form action="3.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="number" name="n">
    <button type="submit">Check</button>
</form>