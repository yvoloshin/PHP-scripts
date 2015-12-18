<?php
$arr = array(1,5,"frog",2,1,3,"frog");
$unique_arr = array();
foreach($arr as $value) {
	if(in_array($value, $unique_arr)==false) {	 
	  array_push($unique_arr, $value);
	}
}
print_r($unique_arr);
?>