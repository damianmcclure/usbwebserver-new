<?php
	include($_SERVER['DOCUMENT_ROOT'].'/phpAlphaDB/core.php');
	include($_SERVER['DOCUMENT_ROOT'].'/phpAlphaDB/acp/config.php');
?>

<html>
	<head>
		<title>phpAlphaDB Administration</title>
		<link rel="stylesheet" type="text/css" href="/phpAlphaDB/acp/styles.css">
	</head>
	<body>
	
	
	<div class="sidebar">
		<h2>&nbsp;&nbsp;phpAlphaDB</h2>
		<a href="/phpAlphaDB/acp"><div class="navitem first">Home</div></a>
		<a href="/phpAlphaDB/acp/databases"><div class="navitem">Databases</div></a>
		<a href="/phpAlphaDB/acp/backup"><div class="navitem">Backup</div></a>
		<a href="/phpAlphaDB/acp/console"><div class="navitem active">Console</div></a>
	</div>
	<div class="pagecontent">
		
		<h1>CONSOLE</h1>
	
		<form method="POST" name="console">
			<textarea class="textinput" style="width:90%; height: 500px; resize:no-resize; font-size:20px;" name="cmd"></textarea><br>
			<input type="submit" class="button" value="&gt; Execute" name="console">
		</form>
		
		<h2>Output:</h2>
		<?php 
			
	if (isset($_POST['console'])) {
		$cmd = $_POST['cmd'];
		if ($cmd !== '') {
			$evalStartTime = mktime();
			echo '<span style="color:white">';
			eval($cmd);
			echo '</span>';
			$evalStopTime = mktime();
			$evalSeconds = number_format(($evalStopTime - $evalStartTime), 3);
			echo '<br><br>Code was executed in '.$evalSeconds.' seconds.<br><br>';
		}
	}
		?>
	</div>
			
	</body>
</html>