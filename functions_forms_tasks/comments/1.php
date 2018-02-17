
<?php
/**
 * Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода. Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
 */
    function getCommonWords($a, $b)
    {
        $first = explode(' ',$a);
        foreach ($first as $key){
            if(substr_count($b,$key))
            {
                echo "$key </br>";
            }
        }
    }

    getCommonWords($_POST['firstarea'],$_POST['secondarea']);
?>
<form action="1.php" method="post">
    <textarea name="firstarea"></textarea>
    <textarea name="secondarea"></textarea>
    <button type="submit">Check</button>
</form>
