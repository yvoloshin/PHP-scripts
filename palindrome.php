<?php
function is_palindrome($str) {
  if (strlen($str) <= 1) {
  	return true;
  }
  $str_cleaned = preg_replace('/\s|[[:punct:]]|_/', '', $str);
  if (strrev($str_cleaned) == $str_cleaned) {
  	return "true";
  } else {
  	return "false";
  }

}

	function print_r2($val){
        echo '<pre>';
        print_r($val);
        echo  '</pre>';
}

print_r2(is_palindrome("racecar"));
print_r2(is_palindrome("rac ecar  ."));
print_r2(is_palindrome("yolo"));
?>
