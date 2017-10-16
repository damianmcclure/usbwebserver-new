<?php
	//check that this code runs as included
	if (function_exists('db_create')) {
		
		function remoteop($connection, $operations) {
			$root = $connection[0];
			$pass = $connection[1];
			$options = array(
				'http' => array(
					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
					'method'  => 'POST',
					'content' => http_build_query($operations)
				)
			);
			$context  = stream_context_create($options);
			$result = file_get_contents($root.'/remoteops.php?auth='.en(md5($pass)), false, $context);
			if ($result == '' || $result == 'a:0:{}') { $result = 'ERROR:NO_RESPONSE'; }
			return $result;
		}
		
	}
?>