<?php
	# This Is phpAlphaAdmin Control Panel, There Is No Need To Edit This File.
	# Please Edit config.php To Change Settings.

	include('config.php');
	include('funcs.php');

	if($cUser === $aAdminUser){
		if($cPass === $aAdminPass){
			if($ipauth === true){
				if($aAdminIP === $_SERVER['REMOTE_ADDR']){
					
				} else {
					header('Location: index.php');
					die();
				}
			} else {
				
			}
		} else {
			header('Location: index.php');
			die();
		}
	} else {
		header('Location: index.php');
		die();
	}
?>
<html>
<head>
	<title><?php echo $phrases["phpAlphaAdmin"];?></title>
	<link href="theme/<?php echo $aTheme;?>/style.css" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script src="funcs.js"></script>
</head>
<body>
<div class="alphaside">
<ul>
	<center><li><a href="control.php"><div class="alphalogo">php<span class="alphagreen">Alpha</span>Admin</div></a></li></center>
	<div class="alphahr"><hr></div>
	<?php 
				foreach (db_list() as $result) {
						echo '<div class="alphadblist"><li><a href="control.php?db='.$result.'"><i class="fa fa-database"></i> '.$result.'</a></li></div>';
				}
				echo '<div class="alphadblist"><li><a href="control.php?p=createdb"<i class="fa fa-plus"></i> Add</a></li></div>';
	?>
</ul>
</div>
<div class="alphatop">
<ul>
	<div style="float:left;"><li><a><?php
			if (function_exists('db_create') && strlen($global_path) > 1) {
				echo '<span style="color:lime;"><b>'.$phrases["phpAlphaDB"].'</b> '.$phrases["working"].' <i class="fa fa-check"></i></span>';
			} else {
				echo '<span style="color:red;"><b>'.$phrases["phpAlphaDB"].'</b> '.$phrases["notworking"].'</span>';
			}
		?></a></li></div>
	<li><a href="control.php?p=docs"><?php echo $phrases["docs"];?></a></li>
	<li><a href="control.php?p=console"><?php echo $phrases["console"];?></a></li>
</ul>
</div>
<div class="alphacontent">
<?php
	if($_GET['p'] === NULL){
		if($_GET['db'] === NULL){
			echo 
			'<span style="font-weight:bold; font-size: 1.3em;">'.$phrases["basicinfo"].'</span><br>'.
			$phrases["databases"].' '.count(db_list());
			echo '<div class="alphahr"><hr></div>';
			echo 'phpAlphaAdmin a1.2<br><br>';
			echo 'Features:<ol><li>Fixed Security Issues.</li></ol>';
			echo '<br>';
			echo 'Bugs:<ol><li>Translations Are STILL Not Fully Functional, English Is Only Language For Now.</li></ol>';
		} else if($_GET['db'] != NULL){
			$name = $_GET['db'];
			$rows = db_rows($name);
			if($_POST['enc']){
				setcookie('enc', $_POST['enc']);
				header('Location: '.$_SERVER['REQUEST_URI']);
			}
			if($_COOKIE["enc"] === "on"){
				echo '<div style="float:right;"><form method="post">'.
			'	Encryption <a style="color: #00ff00; font-weight: bold; cursor:pointer;" onclick="encalert()"><i class="fa fa-question-circle-o"></i></a> <input type="radio" name="enc" value="on" checked>On'.
			'	<input type="radio" name="enc" value="off">Off <input type="submit" class="alphabutton" value="Change">'.
			'</form></div><br>';
			} else {
				echo '<div style="float:right;"><form method="post">'.
			'	Encryption <a style="color: #00ff00; font-weight: bold; cursor:pointer;" onclick="encalert()"><i class="fa fa-question-circle-o"></i></a> <input type="radio" name="enc" value="on">On'.
			'	<input type="radio" name="enc" value="off"  checked>Off <input type="submit" class="alphabutton" value="Change">'.
			'</form></div><br>';
			}
			echo $rows.' '.$phrases["rows"].' ('.$phrases["rememberthat"].') <br>'.$phrases["browserzoom"];
			echo '<br><br><div class="alphatable">';
			echo "\n<table style='width:100%;'>";
			echo "\n";
			for ($i = 0; $i < $rows; $i++) {
						echo '<tr>';
						$fields = db_column_names($name, $i+1);
						foreach ($fields as $field) {
								echo '<th>'.$field.'</th>';
						}
						echo '<th>Options</th>';
				echo "\n";
						echo '</tr>';
				echo "\n";
						echo '<tr>';
						$values = db_column_values($name, $i+1);
						$svals = array_reverse($values);
						echo "\n";
						echo "\n";
						foreach ($svals as $sval) {
							$id = db_column($sval, 0);
						} foreach ($values as $value) {
							if($_COOKIE["enc"] === "on"){
								echo '<td><input class="alphainput" name="'.$field.'" type="text" value="'.de($value).'"></td>';
								echo "\n";
							} else {
								echo '<td><input class="alphainput" name="'.$field.'" type="text" value="'.$value.'"></td>';
								echo "\n";
							}
						}
						echo '<td><a style="color: yellow" title="'.$phrases["edit"].'" href="control.php?p=edit&db='.$_GET['db'].'&action=edit&string='.$id.'"><i class="fa fa-pencil"></i></a>&nbsp;<a style="color: red;" title="'.$phrases["delete"].'" href="control.php?db='.$_GET['db'].'&action=delete&string='.$id.'"><i class="fa fa-remove"></i></a></td>';
					
					echo "\n";
				
				echo "\n";
				echo '</tr>';
					}
			echo '</table>';
			echo '<br>';
			echo '<a href="control.php?p=addrow&db='.$_GET["db"].'"><span style="color: green"><i class="fa fa-plus"></i> Add Row</span></a>';
			echo '<div style="float:right; text-decoration: none;"><a class="alphabutton" href="control.php?p=drop&db='.$_GET['db'].'"><span style="color: red !important;">Drop Database <i class="fa fa-times"></i></span></a></div>';
			if($_GET['action'] === "delete" and $_GET['string'] != NULL){
				if(db_rowdelete($_GET['db'], 'id='.$_GET['string'], false, false)){
					echo '<span style="color:#00FF00;">'.$phrases["sucdel"].$phrases["goingback"].'</span>';;
					?> <meta http-equiv="refresh" content="5; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				} else {
					echo '<span style="color:red;">'.$phrases["faildel"].' <a onclick="faildel()" style="cursor:pointer;"><i class="fa fa-question-circle-o"></i> '.$phrases["goingback"].'</span>';
					?> <meta http-equiv="refresh" content="5; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			} else {
				
			}
		}
	}
	if($_GET['p'] === "console"){
		echo '<form method="POST" name="console">
			<textarea class="alphainput" style="width:100%; height: 500px; resize:no-resize; font-size:20px;" name="cmd"></textarea><br>
			<br><center><input type="submit" class="alphabutton" value="'.$phrases["execute"].'" name="console"></center>
		</form>';
		if (isset($_POST['console'])) {
		$cmd = $_POST['cmd'];
		if ($cmd !== '') {
			$evalStartTime = mktime();
			echo '<span style="color:white">';
			eval($cmd);
			echo '</span>';
			$evalStopTime = mktime();
			$evalSeconds = number_format(($evalStopTime - $evalStartTime), 3);
			echo '<br><br>'.$phrases["codewas"].' '.$evalSeconds.' '.$phrases["seconds"].'<br><br>';
		}
	}
	}
	if($_GET['p'] === "edit"){
		$fields = db_column_names($_GET["db"], $i+1);
		$allfields = $fields[0].' '.$fields[1].' '.$fields[2].' '.$fields[3].' '.$fields[4].' '.$fields[5].' '.$fields[6].' '.$fields[7].' '.$fields[8].' '.$fields[9].' '.$fields[10].' '.$fields[11].' '.$fields[12].' '.$fields[13].' '.$fields[14].' '.$fields[15].' '.$fields[16].' '.$fields[17].' '.$fields[18].' '.$fields[19].' '.$fields[20].' '.$fields[21];
		$cfield = str_word_count($allfields);
		include("library/edit.php");
	}
	if($_GET['p'] === "addrow"){
		$fields = db_column_names($_GET["db"], $i+1);
		$allfields = $fields[0].' '.$fields[1].' '.$fields[2].' '.$fields[3].' '.$fields[4].' '.$fields[5].' '.$fields[6].' '.$fields[7].' '.$fields[8].' '.$fields[9].' '.$fields[10].' '.$fields[11].' '.$fields[12].' '.$fields[13].' '.$fields[14].' '.$fields[15].' '.$fields[16].' '.$fields[17].' '.$fields[18].' '.$fields[19].' '.$fields[20].' '.$fields[21];
		$cfield = str_word_count($allfields);
		include("library/addrow.php");
	}
	if($_GET['p'] === "createdb"){
		if($_POST){
			if(db_create($_POST['database'])){
				echo '<span style="color: #00FF00">Database Created Sucessfully Going Back In 5 Seconds</span>';
				?> <meta http-equiv="refresh" content="5; url=control.php?db=<?php echo $_POST['database'];?>"> <?php
			} else {
				echo '<span style="color: red;">Database Failed To Create <a onclick="failcreate()" style="cursor:pointer;"><i class="fa fa-question-circle-o"></i> Going Back In 5 Seconds</span>';
				?> <meta http-equiv="refresh" content="5; url=control.php?db=<?php echo $_POST['database'];?>"> <?php
			}
		}
		echo '<form method="post">';
		echo "\n";
		echo '	Database Name: <input type="text" name="database" class="alphainput">';
		echo "\n";
		echo '<input type="submit" name="create" value="Create" class="alphabutton">';
		echo "\n";
		echo '</form>';
		echo "\n";
	}
	if($_GET['p'] === "drop"){
		if($_POST["weed"]){
			db_delete($_GET["db"]);
			header('Location: control.php');
		}
		echo 'Are You Sure You Want To Delete '.$_GET["db"].' Database?<br>';
		echo '<form method="post"><input type="submit" value="Yes, Delete It" name="weed" class="alphabutton"></form><a class="alphabutton" onclick="goback()">No, Go Back</a>';
	}
	if($_GET['p'] === "docs"){
		echo '<div class="pre"><pre>Welcome To The phpAlphaAdmin Documentation, This Contains All Info About phpAlphaAdmin, and phpAlphaDB.<br>';
		echo 'phpAlphaDB Creator: JQuery.<br>phpAlphaAdmin Creator: Mcclures.<br>';
		echo '<div class="alphahr"><hr></div>';
		echo '<span style="font-size: 1.3em;">phpAlphaAdmin Docs</span><br>';
		echo '<div class="alphahr"><hr></div>';
		echo 'Make sure to edit your config.php, to change default login, enable/disable IP Auth, change location of phpAlphaDB, and more.<br>';
		echo 'If you want phpAlphaAdmin To Work Properly All The Time, There Are A Few Things You Must Do.<br>';
		echo "	1) You must make an id= column, and put this (it doesnt matter where): <strong style='color:lightblue;'>'id='.en(md5(mktime())).'</strong> <br>";
		echo '	2) If one thing in your DB uses <strong style="color:lightblue;">en(),</strong> everything else should, or some entries will not show up in the DB row viewer.<br>';
		echo '	3) You MUST MUST MUST Secure This Control Panel, This panel allows people to execute PHP code, and change your database. Be Secure As Possible.<br>';
		echo 'phpAlphaAdmin IP Authentication will not work if you are on localhost or if your IP is dynamic.<br><br><br>';
		echo '<div class="alphahr"><hr></div>';
		echo '<span style="font-size: 1.3em;">phpAlphaDB Docs</span><br>';
		echo '<div class="alphahr"><hr></div>';
		echo 'Make sure you specify the correct path to phpAlphaDB. The Default is /phpAlphaDB/. You Can Edit This directory in core.php.<br>';
		echo 'Geting Started<br>';
		echo '	1) core.php, Heart of phpAlphaDB. You Should Not Edit This File Unless You Know What Your Doing.<br>';
		echo '	2) remoteops.php, Handles remote operations. This feature is disabled by default and can be enabled from config.php file.<br>';
		echo '	3) components/config.php, This is where the most of phpAlphaDB settings are stored. Change value of $global_key to another random string to make sure your database stays secured.<br>';
		echo 'Make sure your phpAlphaDB is installed correctly.Navigate to http://yoursite.com/phpAlphaDB and see if you see the following text phpAlphaDB is properly installed on this server<br>';
		echo 'phpAlphaDB must always be located in the root directory of your server, Unless you know what your doing.<br>';
		echo '</pre></div><pre>';
		echo "<strong style='color:lightblue'>FUNCTION NAME: </strong>  db_create('DatabaseName')
<strong style='color:lightblue'>RETURN TYPE: </strong>  Boolean

<strong style='color:lightblue'>FUNCTION NAME: </strong>  db_delete('DatabaseName')
<strong style='color:lightblue'>RETURN TYPE: </strong>  Boolean

<strong style='color:lightblue'>FUNCTION NAME: </strong>  db_list()
<strong style='color:lightblue'>RETURN TYPE: </strong>  Array (of String)

<strong style='color:lightblue'>FUNCTION NAME: </strong>  db_write('DatabaseName', 'name1=value1 name2=value2')
<strong style='color:lightblue'>RETURN TYPE: </strong>  Boolean

<strong style='color:lightblue'>FUNCTION NAME: </strong>  db_writearr('DatabaseName', 'Array of String', isReversed)
<strong style='color:lightblue'>RETURN TYPE: </strong>  Boolean

<strong style='color:lightblue'>FUNCTION NAME: </strong>  db_rewrite('DatabaseName', 'name1=newValue')
<strong style='color:lightblue'>RETURN TYPE: </strong>  Boolean

<strong style='color:lightblue'>FUNCTION NAME: </strong>  db_read('DatabaseName', '', 'name1 name2')
<strong style='color:lightblue'>RETURN TYPE: </strong>  Array (of String)

<strong style='color:lightblue'>FUNCTION NAME: </strong>  db_read('DatabaseName', 'name1=value1', 'name1 name2')
<strong style='color:lightblue'>RETURN TYPE: </strong>  Array (of String)
<strong style='color:lightblue'>NOTE: </strong>  This is used to search from the database.

<strong style='color:lightblue'>FUNCTION NAME: </strong>  db_column_names('DatabaseName', ROW_NUMBER);
<strong style='color:lightblue'>RETURN TYPE: </strong>  Array (of String)

<strong style='color:lightblue'>FUNCTION NAME: </strong>  db_column_values('DatabaseName', ROW_NUMBER);
<strong style='color:lightblue'>RETURN TYPE: </strong>  Array (of String)

<strong style='color:lightblue'>FUNCTION NAME: </strong>  db_rows('DatabaseName');
<strong style='color:lightblue'>RETURN TYPE: </strong>  Integer
<strong style='color:lightblue'>NOTE: </strong>  Gets amount of rows stored on database. Empty DB can show either 0 or -1.
	-1 comes because the database was created but it never had anything in it.

<strong style='color:lightblue'>FUNCTION NAME: </strong>  db_rowdelete('DatabaseName', 'name1=value1', false, false);
<strong style='color:lightblue'>RETURN TYPE: </strong>  Boolean
<strong style='color:lightblue'>NOTE: </strong>  Deletes row from database matching the search options.
	First boolean value is set to TRUE if we want to use CONTAINS instead of exact match search..
	Second boolean value tells the search function to use INVERT search which would then delete all non-matching rows.

<strong style='color:lightblue'>FUNCTION NAME: </strong>  db_column(\$result, 0)
<strong style='color:lightblue'>RETURN TYPE: </strong>  String
<strong style='color:lightblue'>NOTE: </strong>  \$result stores a single row from database and 0 is the number of column we want to get from database
	Remember that in most programming languages first element in array is 0.
	0 --> 1 (first)
	1 --> 2 (second)
	2 --> 3 and so on...
		 
<strong style='color:lightblue'>FUNCTION NAME: </strong>  ".printsafe('printsafe(<script>alert("Hello World");</script>')."')
<strong style='color:lightblue'>RETURN TYPE: </strong>  String
<strong style='color:lightblue'>NOTE: </strong>  This prevents most of the XSS vulnerabilities by deleting all < and > characters and replacing them with
	html codes that displays the same characters.
			
<strong style='color:lightblue'>FUNCTION NAME: </strong>  en('STRING');
<strong style='color:lightblue'>RETURN TYPE: </strong>  String
<strong style='color:lightblue'>NOTE: </strong>  Encodes the string into base64 format and does some changes to make it safe to write
to database without breaking the database.

<strong style='color:lightblue'>FUNCTION NAME: </strong>  de('STRING');
<strong style='color:lightblue'>RETURN TYPE: </strong>  String
<strong style='color:lightblue'>NOTE: </strong>  Decodes the string that is encoded using the above function.

<strong style='color:lightblue'>FUNCTION NAME: </strong>  valid_name('STRING')
<strong style='color:lightblue'>RETURN TYPE: </strong>  Boolean

<strong style='color:lightblue'>FUNCTION NAME: </strong>  valid_url('STRING')
<strong style='color:lightblue'>RETURN TYPE: </strong>  Boolean

<strong style='color:lightblue'>FUNCTION NAME: </strong>  valid_email('STRING')
<strong style='color:lightblue'>RETURN TYPE: </strong>  Boolean

<strong style='color:lightblue'>FUNCTION NAME: </strong>  valid_ip('STRING')
<strong style='color:lightblue'>RETURN TYPE: </strong>  Boolean

<strong style='color:lightblue'>FUNCTION NAME: </strong>  getIPinfo('IP_ADDRESS')
<strong style='color:lightblue'>RETURN TYPE: </strong>  Array (of String)
<strong style='color:lightblue'>NOTE: </strong>Succesful request will return array of string. Array stores these values:
country, country_code, region_code, region, city, zip_code, latitude, longitude, timezone, isp, org, as_code, query_ip, and hostname.
Example script to get country by IP:
\$info = getIPinfo('1.3.3.7');
\$country = \$info['country'];

<strong style='color:lightblue'>FUNCTION NAME: </strong>  getOS()
<strong style='color:lightblue'>RETURN TYPE: </strong>  String
<strong style='color:lightblue'>NOTE: </strong>This tries to get known operating system name based on visitor's useragent string.

<strong style='color:lightblue'>FUNCTION NAME: </strong>  getBrowser()
<strong style='color:lightblue'>RETURN TYPE: </strong>  String
<strong style='color:lightblue'>NOTE: </strong>This tries to get known browser name based on visitor's useragent string.";
	}
	
?>
</div>
</body>
</html>
