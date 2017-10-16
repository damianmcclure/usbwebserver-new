<?php
	# Custom shit made by mcclures
	function autoinc($string){
		$string = db_rows($string);
		$string = $string + 1;
		return $string;
	}
	function hash_pass($password){
		#not done yet
	}
?>