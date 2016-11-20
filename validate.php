<?php
function validate ($email){
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo ("This ($email) email address is considered valid.");
	} else {
		echo ("This ($email) email address is invalid.");
	}
}
$email = 'joe@gmail.com';
$good = validate ($email);
?>
