<?php
echo round(sqrt(379), 0), '<br>';
echo round(sqrt(379), 1), '<br>';
echo round(sqrt(379), 2), '<br>';

$sq = sqrt(587);
$ce = ceil($sq);
$fl = floor($sq);
$arr = ['ceil' => $ce, 'floor' => $fl];
print_r($arr);
echo $arr['ceil'];





