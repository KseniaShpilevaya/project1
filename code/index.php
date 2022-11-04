<?php

$str = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a..b/'; 
$matches = []; 
$count = preg_match_all($regexp, $str, $matches);
print_r($matches);
