<?php

echo getcwd() . "\n";
$dir = getcwd();
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
    $files[] = $filename;
}

sort($files);

print_r($files);
?>

123-45-6789
