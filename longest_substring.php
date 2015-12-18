<?php
function longest_substr($str1, $str2) {
  $common = Array();
  $str1_arr = str_split($str1);
  $str2_arr = str_split($str2);
  foreach($str1_arr as $value) {
	if(in_array($value, $str2_arr) && !in_array($value, $common)) {	 
	    array_push($common, $value);
	}
  }
 return $common;
}

function print_r2($val){
        echo '<pre>';
        print_r($val);
        echo  '</pre>';
}

print_r2(longest_substr("ABCDAF", "ACBCF"));
?>
