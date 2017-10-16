<?php
	include($_SERVER['DOCUMENT_ROOT'].'/phpAlphaDB/core.php');
	include($_SERVER['DOCUMENT_ROOT'].'/phpAlphaDB/acp/config.php');
	
	if (isset($_GET['name'])) {
		$name = $_GET['name'];
		$rows = db_rows($name);
	}
	
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
		<a href="/phpAlphaDB/acp/console"><div class="navitem">Console</div></a>
	</div>
	<div class="pagecontent">
		
		<h1>DATABASE - <?php echo printsafe($name); ?></h1>
		<h2 style="color:white;"><?php echo $rows; ?> rows</h2>
	
			<table cellpadding="6">
				<?php
					for ($i = 0; $i < $rows; $i++) {
						$fields = db_column_names($name, $i+1);
						echo '<tr style="background-color:red; font-weight:bold; color:white;">';
						foreach ($fields as $field) {
							echo '<td style="border-right: 1px solid gray;">'.$field.'</td>';
						}
						echo '</tr>';
						echo '<tr>';
						$values = db_column_values($name, $i+1);
						foreach ($values as $value) {
							echo '<td style="border-right: 1px solid gray;"><input type="text" value="'.str_replace('_', ' ', $value).'" class="textbox"></td>';
						}
						echo '</tr>';
					}
				?>
			</table>
	
	
	</div>
			
	</body>
</html>