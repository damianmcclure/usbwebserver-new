<?php
	include($_SERVER['DOCUMENT_ROOT'].'/phpAlphaDB/core.php');
	include($_SERVER['DOCUMENT_ROOT'].'/phpAlphaDB/acp/config.php');
	
	if (isset($_GET['action'])) {
		$action = $_GET['action'];
		if ($action == 'db_delete') {
			$name = $_GET['name'];
			db_delete($name);
		}
		
		header('Location: /phpAlphaDB/acp/databases');
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
		<a href="/phpAlphaDB/acp/databases"><div class="navitem active">Databases</div></a>
		<a href="/phpAlphaDB/acp/backup"><div class="navitem">Backup</div></a>
		<a href="/phpAlphaDB/acp/console"><div class="navitem">Console</div></a>
	</div>
	<div class="pagecontent">
		
		<h1>DATABASES</h1>
	
			<table cellpadding="6">
				<tr style="background-color:red; font-weight:bold; color:white;">
					<td colspan="2">Database name</td>
				</tr>
				<?php
					$results = db_list();
					foreach ($results as $result) {
						$controls = '<a href="../database/?name='.$result.'"><button>View/Edit</button></a> <a href="?action=db_delete&name='.$result.'"><button>Delete</button></a>';
						echo '<tr><td>'.$result.'</td><td align="right">'.$controls.'</td></tr>';
					}
				?>
			</table>
	
	
	</div>
			
	</body>
</html>