<?php

/* This script deletes social security numbers from all files in the in the current working directory.
   All file names are placed into an array. Then the contents of each file are read into a string and 
   the string is searched using preg_match. If a social security number is found, then it is replaced 
   by "ss number deleted" using preg_replace.
*/

echo "Current directory is: ";
echo getcwd()
echo "<br />";
$dir = getcwd();
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
    $files[] = $filename;
}
sort($files);
print_r($files);
foreach($files as $value) {
	echo "<br />";
	echo $value;
	echo "<br />";
	if ($file = fopen($value, "r+")) { 
		$contents = fread($file, filesize($value));
		if(preg_match("/\d{3}-\d{2}-\d{4}/", $contents) == 1) {
		  $new_contents = preg_replace("/\d{3}-\d{2}-\d{4}/", "ss number deleted", $contents);
		  rewind($file);
		  if (fwrite($file, $new_contents)) {
			echo "ss number deleted";
			echo "<br />";
		  } else {
		    echo "cannot write to file $value";
		    echo "<br />";
		  }
		  fclose($file);
		} else {
		  fclose($file);
		}
	} else {
	  echo "Unable to open file!";
	}
}

?>


