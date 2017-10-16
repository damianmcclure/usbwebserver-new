<?php

//Checks if input only contains letters and whitespaces (e.g. Firstname Lastname)
function valid_name($str) {
	$return = true;
	if (!preg_match("/^[a-zA-Z0-9\s]+$/",$str)) {
		$return = false;
	}
	return $return;
}

//Checks if input is valid URL
function valid_url($str) {
	$return = true;
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$str)) {
      $return = false;
    }
	return $return;
}

//Checks if input is valid email address
function valid_email($str) {
	$return = true;
    if (!filter_var($str, FILTER_VALIDATE_EMAIL)) {
      $return = false;
    }
	return $return;
}

//Checks if input is valid IPv4 address
function valid_ip($str) {
	$return = true;
    if (!filter_var($str, FILTER_VALIDATE_IP)) {
      $return = false;
    }
	return $return;
}

?>