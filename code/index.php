<?php

$str = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a..b/'; 
$matches = []; 
preg_match_all($regexp, $str, $matches);
print_r($matches);

echo '<br>';

function cube($matches)
	{
		$result = pow($matches[0], 3); 
		return $result;
	}

$str1 =  'a1b2c3';
$regexp1 = '/[0-9]/'; 
$str1 = preg_replace_callback($regexp1, 'cube', $str1);
print_r($str1);
