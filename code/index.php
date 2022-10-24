<?php
function printStringReturnNumber($s)
{
    $a = rand(0, 100);
    echo $s, '<br>';
    return $a;
}

$st = "Привет!";
$my_num = printStringReturnNumber($st);
echo $my_num;