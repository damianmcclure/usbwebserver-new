<?php
	$language = $_COOKIE['language'];
	if(!isset($language) || strpos($a, '/') !== false){ // check here for directory traversal + isset
		setcookie('language', 'english');
	}
	include('library/lang/'.str_replace("\0", "", $language).'.php'); // Removing nullbyte for older PHP versions
?>
