<?php
$a = 5;
$b = 6;
echo abs($a - $b), '<br>';

$a = 7;
$b = 6;
echo abs($a - $b), '<br>';

$a = -5;
$b = 6;
echo abs($a - $b), '<br>';

$a = 5;
$b = -6;
echo abs($a - $b), '<br>';

$a = -5;
$b = -6;
echo abs($a - $b), '<br>';

$arr = [1, 2, -1, -2, 3, -3];
foreach ($arr as &$value) {
    $value = abs($value);
}
print_r ($arr);