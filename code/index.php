<?php
function increaseEnthusiasm($s) {
    $s = $s . '!';
    return $s;
}

$a = "Привет, привет";
echo increaseEnthusiasm($a), '<br>';

function repeatThreeTimes($s) {
    return $s . $s . $s;
}

$b = 'Привет';
echo repeatThreeTimes($b), '<br>';

echo increaseEnthusiasm(repeatThreeTimes($b)), '<br>';

function cut($s, $count = 10) {
    return substr($s, 0, $count);
}

echo cut('Hello', 3), '<br>'; // воспринимает латиницу
echo cut('Hello'), '<br>';

function print_($ar, $i, $n) {
    if ($i >= $n)
        return;
    echo $ar[$i] . ' ';
    print_($ar, $i + 1, $n);
}

$arr = [15, 4, 5, 1];

print_($arr, 0, count($arr));

echo '<br>';

function sumDigits($n) {
    $arr = str_split($n);
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    if ($sum <= 9)
        echo $sum;
    else
        sumDigits($sum);
}

$number = 1999;

sumDigits($number);