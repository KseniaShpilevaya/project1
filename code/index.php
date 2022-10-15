<?php
$st = pow(2, 10);
echo $st, '<br>';

$sq = sqrt(245);
echo $sq, '<br>';

$arr = [4, 2, 5, 19, 0, 10];
$sumQ = 0;
foreach ($arr as &$value) {
    $sumQ += pow($value, 2);
}
$end = sqrt($sumQ);
echo $end;






