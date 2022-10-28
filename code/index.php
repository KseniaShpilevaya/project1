<?php
$a = [];
$n = 10;
$s = '';
for ($i = 1; $i <= $n; $i++) {
    $s .= 'x';
    $a[] = $s;
}
print_r($a);

echo '<br>';

function arrayFill($x, $n)
{
    $arr = [];
    for ($i = 0; $i < $n; $i++) {
        $arr[$i] = $x;
    }
    return $arr;
}

$arr = arrayFill('h', 5);

print_r($arr);

echo '<br>';

$array_2D = [[[1, 2, 3], [4, 5], [6]]];
$sum = 0;
for ($row = 0; $row < sizeof($array_2D); $row++) {
    for ($subarr = 0; $subarr < sizeof($array_2D[$row]); $subarr++) 
        for ($i = 0; $i < sizeof($array_2D[$row][$subarr]); $i++)
            $sum += $array_2D[$row][$subarr][$i];
}

echo $sum;

echo '<br>';

$arr1 = [];
for ($subarr = 0; $subarr < 3; $subarr++) 
    for ($i = 0; $i < 3; $i++) {
        if ($subarr == 0)
            $arr1[$subarr][$i] = $subarr + $i + 1;
        if ($subarr == 1)
            $arr1[$subarr][$i] = $subarr + $i + 3;
        if ($subarr == 2)
            $arr1[$subarr][$i] = $subarr + $i + 5;
    }
print_r($arr1);

echo '<br>';

$arr3 = [2, 5, 3, 9];
$result = $arr3[0] * $arr3[1] + $arr3[2] * $arr3[3];
echo $result;

echo '<br>';

$user = ['name' => 'Ksenia', 'surname' => 'Shpilevaya', 'patronymic' => 'Dmitrievna'];
echo $user['name'] . " " . $user['surname'] . " " . $user['patronymic'];

echo '<br>';

$date = ['year' => 2022, 'month' => 'October', 'day' => 28];
echo $date['year'] . "-" . $date['month'] . "-" . $date['day'];

echo '<br>';

$arr4 = ['a', 'b', 'c', 'd', 'e'];
echo count($arr4), '<br>';

echo $arr4[sizeof($arr4) - 1], '<br>';
echo $arr4[sizeof($arr4) - 2];

echo '<br>';