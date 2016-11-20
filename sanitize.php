<?php
function sanitize($string1) {
	$sanitizedstr = filter_var($string1, FILTER_SANITIZE_STRING);
	echo $sanitizedstr;
}

$string1 = "<><><><><><><>sfdsf<>";
$good = sanitize($string1);
