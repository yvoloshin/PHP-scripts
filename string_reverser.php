<?php
$str = "Hello";

$arr1 = str_split($str);
$reversed_str = '';
foreach($arr1 as $value) {
	$reversed_str = $value.$reversed_str;
}
echo $reversed_str;
?>