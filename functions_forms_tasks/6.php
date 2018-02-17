<?php
/**
 * 6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны
 * помещаться в папку gallery и выводиться на странице в виде таблицы.
 */
if(!empty($_FILES)){
    if ($_FILES['file']) {
        $file_ary = reArrayFiles($_FILES['file']);
        foreach ($file_ary as $file) {
            $files = __DIR__ . '/gallery/' . $file['name'];
            move_uploaded_file($file['tmp_name'], $files);
        }
    }
}
$fileList = scandir(__DIR__ . '/gallery');
if($fileList)
{
    echo "<table>";
    foreach ($fileList as $file)
    {
        if(!stripos($file,'.') == 0)
        {
            echo "<tr>";
            echo "<td> $file </td>";
            echo "</tr>";
        }
    }
    echo "</table>";
}

function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}
?>

<form action="6.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple>
    <button type="submit">Отправить</button>
</form>

