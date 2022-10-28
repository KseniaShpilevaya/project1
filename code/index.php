<?php

function func1($a, $b) {
    if ($a + $b > 10)
        return "true";
    else
        return "false";
}

echo func1(5, 1), '<br>';
echo func1(10, 1);

echo '<br>';

function func2($a, $b) {
    if ($a == $b)
        return "true";
    else
        return "false";
}

echo func2(5, 5), '<br>';
echo func2(10, 1);

echo '<br>';

$test = 1;
if ($test== 0) { 
    echo 'верно', '<br>'; 
}
echo $test == 0 ? 'верно' : '';

echo '<br>';

function sumDigits($n) {
    $arr = str_split($n);
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    return $sum;
}

$age = 20;

if ($age < 10 || $age > 99)
    echo "Число не двухзначное.", '<br>';
else if ($age >= 10 && $age <= 99)
{
    echo sumDigits($age), '<br>';
    if (sumDigits($age) <= 9)
        echo "Cумма цифр однозначна.", '<br>';
    else 
        echo "Cумма цифр двузначна.";
}

echo '<br>';

$arr = [1, 2, 3];
if (count($arr) == 3)
    echo array_sum($arr);