<?php
function is_prime($number) {
	foreach(range(2, $number-1) as $value) {
		$remainder = $number % $value;
		if ($remainder == 0) {
			return false;
		}
	}
	return true;
}
function largest_prime($number) {
	$largest_prime_factor = 0;
	foreach(range(2, $number-1) as $value) {
		if(is_prime($value) && $number % $value == 0 && $value > $largest_prime_factor) {
			$largest_prime_factor = $value;
		} 
	}
	return $largest_prime_factor;
}
print_r(largest_prime(26));
?>
