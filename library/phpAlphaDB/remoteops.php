<?php

	include($_SERVER['DOCUMENT_ROOT'].'/phpAlphaDB/core.php');
	$functions = get_defined_functions();
	$functions = $functions['user'];
	
	if (strlen($remoteopsPassword) !== 0) {
		$auth = de($_GET['auth']);
		if (md5($remoteopsPassword) == $auth) {
			$data = $_REQUEST;
			foreach ($data as $i) {

				if ($remoteopsCode == true) {
					if ($i[0] == 'code') {
						eval($i[1]);
					}
				} else {
					if ($i[0] == 'code') {
						echo 'ERROR:CODE_EXECUTION_DISABLED';
					}
				}
				
				if ($i[0] == 'db_create') {
					$ok = db_create($i[1]);
					echo $ok;
				}
				
				if ($i[0] == 'db_list') {
					$ok = db_list();
					echo serialize($ok);
				}
				
				if ($i[0] == 'db_read') {
					$results = db_read($i[1], $i[2], $i[3]);
					echo serialize($results);
				}
				
			}
		} else {
			die('ERROR:AUTH_ERROR');
		}
	} else {
		die('ERROR:REMOTEOPS_DISABLED');
	}
	
?>