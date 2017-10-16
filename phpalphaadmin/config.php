<?php

	# Welcome To phpAlphaAdmin Configuration.
	# Here Is Where You Edit Config.

	# This Is Your Location Of phpAlphaDB core.php From DocumentRoot.
	$alphadbcore = '/phpAlphaDB/core.php';

	# And Include, No Need To Edit This.
	include($_SERVER['DOCUMENT_ROOT'].$alphadbcore);

	# Here Is Where You Edit phpAlphaAdmin Login.
	$aAdminUser = 'alpha';
	$aAdminPass = md5('pswd'); # I implore you to put the hash string here (use a md5 hash website)
	
	# If You Want, You Can Add An Extra Layer Of Security By Adding IP Authentication. NOTE: This Does Not Work If You Are On localhost, Or If You Are Dynamic. Disabled By Default.
	$ipauth = false;
	$aAdminIP = '127.0.0.1';

	# Here You Put Your Theme, Not Needed, But Helps For Visual Asthetics.
	$aTheme = 'default';

	# The Rest Does Not Need To Be Edited
	$pUser = $_POST['aAdminUser'];
	$pPass = md5($_POST['aAdminPass']);
	$cUser = $_COOKIE['aAdminUser'];
	$cPass = $_COOKIE['aAdminPass'];
?>
