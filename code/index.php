<?php
// первое задание
$a = 3;
$del = [];

for ($i = 1; $i <= $a; $i++) {
    if ($a % $i == 0)
        array_push($del, $i);
}

print_r($del);
echo '<br>';

// второе задание
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$sum = 0;
$i = 0;

while ($sum <= 10) {
    $sum += $arr[$i];
    $i++;
}
echo $i;