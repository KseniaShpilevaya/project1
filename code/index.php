<?php

$arr = [1, 2, 3, 4, 5];
$center = array_sum($arr) / count($arr);

echo $center;

echo '<br>';

echo array_sum(range(1, 100));

echo '<br>';

$sqrtNum = array_map('sqrt', $arr);
print_r($sqrtNum);

echo '<br>';

$key = range('a', 'z');
$value = range(1, 26);
$arr1 = array_combine($key, $value);
print_r($arr1);

echo '<br>';

$s = '1234567890';
$arr2 = str_split($s); 
$chunk = array_chunk($arr2, 2); 
$chunkUn = array_map('implode', $chunk); 
echo array_sum($chunkUn);
