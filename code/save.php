<?php
if (!empty($_GET['text'])) {
    $str = $_GET['text'];
    $strLen = strlen($str);
    $wordsCount = count(explode(' ', $str));
    echo "Количество слов - ";
    echo $wordsCount;
    echo ", ";
    echo "количество символов - ";
    echo $strLen;
    echo ".";
}
else {
echo 'Вы ничего не ввели.';
}