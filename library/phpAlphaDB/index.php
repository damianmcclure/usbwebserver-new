<html>
	<head>
		<title>phpAlphaDB</title>
		<style type="text/css">
			body {
				background-color: black;
				font-size: 26px;
				font-family: Tahoma, Geneva, sans-serif;
				margin: 15px;
				color: white;
			}
		</style>
	</head>
	<body>
		<center>
		
		<h1>phpAlphaDB</h1>
		
		<?php
			include($_SERVER['DOCUMENT_ROOT'].'/phpAlphaDB/core.php');
			if (function_exists('db_create') && strlen($global_path) > 1) {
				echo '<span style="color:lime;"><b>phpAlphaDB</b> is correctly installed on this server</span> <br>';
			} else {
				echo '<span style="color:red;"><b>phpAlphaDB</b> might not be properly installed on this server</span> <br>';
			}
		?>
		</center>
	</body>
</html>