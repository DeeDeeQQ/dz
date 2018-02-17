<?php

/**
 * Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
 */
    function getTop3Lenght($text)
    {
        $words = explode(' ',$text);
        usort($words, function ($a, $b)
        {
             return mb_strlen($b) <=> mb_strlen($a);
        });
        echo '<pre>';
        print_r(array_slice($words, 0, 3));
        echo '</pre>';
    }

    if($_POST)
    {
        getTop3Lenght($_POST['firstarea']);
    }
?>
<form action="2.php" method="post">
    <textarea name="firstarea"></textarea>
    <button type="submit">Check</button>
</form>
