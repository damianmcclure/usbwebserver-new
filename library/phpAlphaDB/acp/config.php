<?php

	$enableThisFeature = false;
	$unrestrictedAccess = false;
	
	// This feature (phpAlphaDB administration) is not yet completed.
	// You can still use it if you really want to, just replace my IP address with yours.
	
	//  REMEMBER THAT THIS FEATURE IS NOT VERY SAFE
	//  AND ANYONE FROM SAME NETWORK CAN ACCESS
	//  THE CPANEL IF THEY KNOW THE WEB ADDRESS
	
	$whitelist = array('37.219.108.83', 'ip2', 'ip3');
	$userIP = $_SERVER['REMOTE_ADDR'];
	
	if ($unrestrictedAccess == false) {
		if ($enableThisFeature == false) { die("<h2>Access denied.</h2><p>Server administrator haven't enabled this feature. If you are server administrator you can enable this feature from '/phpAlphaDB/acp/config.php'</p>"); }
		if (!in_array($userIP, $whitelist)) {
			die("<h2>Access denied.</h2><p>You are not allowed to access this area.</p>");
		}
	} else {
		//allow access by anyone
	}

?>