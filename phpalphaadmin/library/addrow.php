<?php
	if(!isset($aAdminUser)){
		die();
	}

	if(!isset($aAdminPass)){
		die();
	}

	if($cUser === $aAdminUser){
		if($cPass === $aAdminPass){
			if($ipauth === true){
				if($aAdminIP === $_SERVER['REMOTE_ADDR']){
					
				} else {
					die();
				}
			} else {
				
			}
		} else {
			die();
		}
	} else {
		die();
	}

	if($cfield === 0 or $cfield === NULL){
		if($_GET['srows'] === NULL){
			echo '<form method="post">';
			echo 'Enter How Many Rows (max supported is 22): <input type="text" class="alphainput" style="width: 39px;" name="srows" pattern="[1-9]{1,2}" title="Only 2 Letters And Only Numbers">';
			echo '</form>';
			if($_POST){
				header('Location: control.php?p=addrow&db='.$_GET["db"].'&srows='.$_POST["srows"]);
			}
		}
		if($_GET['srows'] === "1"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "2"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "3"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "4"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "5"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "6"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "7"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "8"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "9"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']).' '.$_POST['columnnine'].'='.en($_POST['rownine']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight'].' '.$_POST['columnnine'].'='.$_POST['rownine']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnnine" class="alphainput" type="text"> = </td>
					<td><input name="rownine" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "10"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']).' '.$_POST['columnnine'].'='.en($_POST['rownine']).' '.$_POST['columnten'].'='.en($_POST['rowten']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight'].' '.$_POST['columnnine'].'='.$_POST['rownine'].' '.$_POST['columnten'].'='.$_POST['rowten']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnnine" class="alphainput" type="text"> = </td>
					<td><input name="rownine" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnten" class="alphainput" type="text"> = </td>
					<td><input name="rowten" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "11"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']).' '.$_POST['columnnine'].'='.en($_POST['rownine']).' '.$_POST['columnten'].'='.en($_POST['rowten']).' '.$_POST['column11'].'='.en($_POST['row11']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight'].' '.$_POST['columnnine'].'='.$_POST['rownine'].' '.$_POST['columnten'].'='.$_POST['rowten'].' '.$_POST['column11'].'='.$_POST['row11']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnnine" class="alphainput" type="text"> = </td>
					<td><input name="rownine" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnten" class="alphainput" type="text"> = </td>
					<td><input name="rowten" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column11" class="alphainput" type="text"> = </td>
					<td><input name="row11" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "12"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']).' '.$_POST['columnnine'].'='.en($_POST['rownine']).' '.$_POST['columnten'].'='.en($_POST['rowten']).' '.$_POST['column11'].'='.en($_POST['row11']).' '.$_POST['column12'].'='.en($_POST['row12']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight'].' '.$_POST['columnnine'].'='.$_POST['rownine'].' '.$_POST['columnten'].'='.$_POST['rowten'].' '.$_POST['column11'].'='.$_POST['row11'].' '.$_POST['column12'].'='.$_POST['row12']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnnine" class="alphainput" type="text"> = </td>
					<td><input name="rownine" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnten" class="alphainput" type="text"> = </td>
					<td><input name="rowten" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column11" class="alphainput" type="text"> = </td>
					<td><input name="row11" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column12" class="alphainput" type="text"> = </td>
					<td><input name="row12" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "13"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']).' '.$_POST['columnnine'].'='.en($_POST['rownine']).' '.$_POST['columnten'].'='.en($_POST['rowten']).' '.$_POST['column11'].'='.en($_POST['row11']).' '.$_POST['column12'].'='.en($_POST['row12']).' '.$_POST['column13'].'='.en($_POST['row13']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight'].' '.$_POST['columnnine'].'='.$_POST['rownine'].' '.$_POST['columnten'].'='.$_POST['rowten'].' '.$_POST['column11'].'='.$_POST['row11'].' '.$_POST['column12'].'='.$_POST['row12'].' '.$_POST['column13'].'='.$_POST['row13']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnnine" class="alphainput" type="text"> = </td>
					<td><input name="rownine" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnten" class="alphainput" type="text"> = </td>
					<td><input name="rowten" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column11" class="alphainput" type="text"> = </td>
					<td><input name="row11" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column12" class="alphainput" type="text"> = </td>
					<td><input name="row12" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column13" class="alphainput" type="text"> = </td>
					<td><input name="row13" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "14"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']).' '.$_POST['columnnine'].'='.en($_POST['rownine']).' '.$_POST['columnten'].'='.en($_POST['rowten']).' '.$_POST['column11'].'='.en($_POST['row11']).' '.$_POST['column12'].'='.en($_POST['row12']).' '.$_POST['column13'].'='.en($_POST['row13']).' '.$_POST['column14'].'='.en($_POST['row14']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight'].' '.$_POST['columnnine'].'='.$_POST['rownine'].' '.$_POST['columnten'].'='.$_POST['rowten'].' '.$_POST['column11'].'='.$_POST['row11'].' '.$_POST['column12'].'='.$_POST['row12'].' '.$_POST['column13'].'='.$_POST['row13'].' '.$_POST['column14'].'='.$_POST['row14']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnnine" class="alphainput" type="text"> = </td>
					<td><input name="rownine" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnten" class="alphainput" type="text"> = </td>
					<td><input name="rowten" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column11" class="alphainput" type="text"> = </td>
					<td><input name="row11" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column12" class="alphainput" type="text"> = </td>
					<td><input name="row12" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column13" class="alphainput" type="text"> = </td>
					<td><input name="row13" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column14" class="alphainput" type="text"> = </td>
					<td><input name="row14" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "15"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']).' '.$_POST['columnnine'].'='.en($_POST['rownine']).' '.$_POST['columnten'].'='.en($_POST['rowten']).' '.$_POST['column11'].'='.en($_POST['row11']).' '.$_POST['column12'].'='.en($_POST['row12']).' '.$_POST['column13'].'='.en($_POST['row13']).' '.$_POST['column14'].'='.en($_POST['row14']).' '.$_POST['column15'].'='.en($_POST['row15']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight'].' '.$_POST['columnnine'].'='.$_POST['rownine'].' '.$_POST['columnten'].'='.$_POST['rowten'].' '.$_POST['column11'].'='.$_POST['row11'].' '.$_POST['column12'].'='.$_POST['row12'].' '.$_POST['column13'].'='.$_POST['row13'].' '.$_POST['column14'].'='.$_POST['row14'].' '.$_POST['column15'].'='.$_POST['row15']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnnine" class="alphainput" type="text"> = </td>
					<td><input name="rownine" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnten" class="alphainput" type="text"> = </td>
					<td><input name="rowten" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column11" class="alphainput" type="text"> = </td>
					<td><input name="row11" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column12" class="alphainput" type="text"> = </td>
					<td><input name="row12" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column13" class="alphainput" type="text"> = </td>
					<td><input name="row13" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column14" class="alphainput" type="text"> = </td>
					<td><input name="row14" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column15" class="alphainput" type="text"> = </td>
					<td><input name="row15" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "16"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']).' '.$_POST['columnnine'].'='.en($_POST['rownine']).' '.$_POST['columnten'].'='.en($_POST['rowten']).' '.$_POST['column11'].'='.en($_POST['row11']).' '.$_POST['column12'].'='.en($_POST['row12']).' '.$_POST['column13'].'='.en($_POST['row13']).' '.$_POST['column14'].'='.en($_POST['row14']).' '.$_POST['column15'].'='.en($_POST['row15']).' '.$_POST['column16'].'='.en($_POST['row16']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight'].' '.$_POST['columnnine'].'='.$_POST['rownine'].' '.$_POST['columnten'].'='.$_POST['rowten'].' '.$_POST['column11'].'='.$_POST['row11'].' '.$_POST['column12'].'='.$_POST['row12'].' '.$_POST['column13'].'='.$_POST['row13'].' '.$_POST['column14'].'='.$_POST['row14'].' '.$_POST['column15'].'='.$_POST['row15'].' '.$_POST['column16'].'='.$_POST['row16']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnnine" class="alphainput" type="text"> = </td>
					<td><input name="rownine" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnten" class="alphainput" type="text"> = </td>
					<td><input name="rowten" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column11" class="alphainput" type="text"> = </td>
					<td><input name="row11" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column12" class="alphainput" type="text"> = </td>
					<td><input name="row12" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column13" class="alphainput" type="text"> = </td>
					<td><input name="row13" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column14" class="alphainput" type="text"> = </td>
					<td><input name="row14" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column15" class="alphainput" type="text"> = </td>
					<td><input name="row15" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column16" class="alphainput" type="text"> = </td>
					<td><input name="row16" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "17"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']).' '.$_POST['columnnine'].'='.en($_POST['rownine']).' '.$_POST['columnten'].'='.en($_POST['rowten']).' '.$_POST['column11'].'='.en($_POST['row11']).' '.$_POST['column12'].'='.en($_POST['row12']).' '.$_POST['column13'].'='.en($_POST['row13']).' '.$_POST['column14'].'='.en($_POST['row14']).' '.$_POST['column15'].'='.en($_POST['row15']).' '.$_POST['column16'].'='.en($_POST['row16']).' '.$_POST['column17'].'='.en($_POST['row17']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight'].' '.$_POST['columnnine'].'='.$_POST['rownine'].' '.$_POST['columnten'].'='.$_POST['rowten'].' '.$_POST['column11'].'='.$_POST['row11'].' '.$_POST['column12'].'='.$_POST['row12'].' '.$_POST['column13'].'='.$_POST['row13'].' '.$_POST['column14'].'='.$_POST['row14'].' '.$_POST['column15'].'='.$_POST['row15'].' '.$_POST['column16'].'='.$_POST['row16'].' '.$_POST['column17'].'='.$_POST['row17']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnnine" class="alphainput" type="text"> = </td>
					<td><input name="rownine" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnten" class="alphainput" type="text"> = </td>
					<td><input name="rowten" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column11" class="alphainput" type="text"> = </td>
					<td><input name="row11" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column12" class="alphainput" type="text"> = </td>
					<td><input name="row12" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column13" class="alphainput" type="text"> = </td>
					<td><input name="row13" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column14" class="alphainput" type="text"> = </td>
					<td><input name="row14" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column15" class="alphainput" type="text"> = </td>
					<td><input name="row15" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column16" class="alphainput" type="text"> = </td>
					<td><input name="row16" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column17" class="alphainput" type="text"> = </td>
					<td><input name="row17" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "18"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']).' '.$_POST['columnnine'].'='.en($_POST['rownine']).' '.$_POST['columnten'].'='.en($_POST['rowten']).' '.$_POST['column11'].'='.en($_POST['row11']).' '.$_POST['column12'].'='.en($_POST['row12']).' '.$_POST['column13'].'='.en($_POST['row13']).' '.$_POST['column14'].'='.en($_POST['row14']).' '.$_POST['column15'].'='.en($_POST['row15']).' '.$_POST['column16'].'='.en($_POST['row16']).' '.$_POST['column17'].'='.en($_POST['row17']).' '.$_POST['column18'].'='.en($_POST['row18']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight'].' '.$_POST['columnnine'].'='.$_POST['rownine'].' '.$_POST['columnten'].'='.$_POST['rowten'].' '.$_POST['column11'].'='.$_POST['row11'].' '.$_POST['column12'].'='.$_POST['row12'].' '.$_POST['column13'].'='.$_POST['row13'].' '.$_POST['column14'].'='.$_POST['row14'].' '.$_POST['column15'].'='.$_POST['row15'].' '.$_POST['column16'].'='.$_POST['row16'].' '.$_POST['column17'].'='.$_POST['row17'].' '.$_POST['column18'].'='.$_POST['row18']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnnine" class="alphainput" type="text"> = </td>
					<td><input name="rownine" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnten" class="alphainput" type="text"> = </td>
					<td><input name="rowten" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column11" class="alphainput" type="text"> = </td>
					<td><input name="row11" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column12" class="alphainput" type="text"> = </td>
					<td><input name="row12" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column13" class="alphainput" type="text"> = </td>
					<td><input name="row13" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column14" class="alphainput" type="text"> = </td>
					<td><input name="row14" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column15" class="alphainput" type="text"> = </td>
					<td><input name="row15" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column16" class="alphainput" type="text"> = </td>
					<td><input name="row16" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column17" class="alphainput" type="text"> = </td>
					<td><input name="row17" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column18" class="alphainput" type="text"> = </td>
					<td><input name="row18" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "19"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']).' '.$_POST['columnnine'].'='.en($_POST['rownine']).' '.$_POST['columnten'].'='.en($_POST['rowten']).' '.$_POST['column11'].'='.en($_POST['row11']).' '.$_POST['column12'].'='.en($_POST['row12']).' '.$_POST['column13'].'='.en($_POST['row13']).' '.$_POST['column14'].'='.en($_POST['row14']).' '.$_POST['column15'].'='.en($_POST['row15']).' '.$_POST['column16'].'='.en($_POST['row16']).' '.$_POST['column17'].'='.en($_POST['row17']).' '.$_POST['column18'].'='.en($_POST['row18']).' '.$_POST['column19'].'='.en($_POST['row19']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight'].' '.$_POST['columnnine'].'='.$_POST['rownine'].' '.$_POST['columnten'].'='.$_POST['rowten'].' '.$_POST['column11'].'='.$_POST['row11'].' '.$_POST['column12'].'='.$_POST['row12'].' '.$_POST['column13'].'='.$_POST['row13'].' '.$_POST['column14'].'='.$_POST['row14'].' '.$_POST['column15'].'='.$_POST['row15'].' '.$_POST['column16'].'='.$_POST['row16'].' '.$_POST['column17'].'='.$_POST['row17'].' '.$_POST['column18'].'='.$_POST['row18'].' '.$_POST['column19'].'='.$_POST['row19']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnnine" class="alphainput" type="text"> = </td>
					<td><input name="rownine" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnten" class="alphainput" type="text"> = </td>
					<td><input name="rowten" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column11" class="alphainput" type="text"> = </td>
					<td><input name="row11" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column12" class="alphainput" type="text"> = </td>
					<td><input name="row12" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column13" class="alphainput" type="text"> = </td>
					<td><input name="row13" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column14" class="alphainput" type="text"> = </td>
					<td><input name="row14" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column15" class="alphainput" type="text"> = </td>
					<td><input name="row15" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column16" class="alphainput" type="text"> = </td>
					<td><input name="row16" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column17" class="alphainput" type="text"> = </td>
					<td><input name="row17" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column18" class="alphainput" type="text"> = </td>
					<td><input name="row18" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column19" class="alphainput" type="text"> = </td>
					<td><input name="row19" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "20"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']).' '.$_POST['columnnine'].'='.en($_POST['rownine']).' '.$_POST['columnten'].'='.en($_POST['rowten']).' '.$_POST['column11'].'='.en($_POST['row11']).' '.$_POST['column12'].'='.en($_POST['row12']).' '.$_POST['column13'].'='.en($_POST['row13']).' '.$_POST['column14'].'='.en($_POST['row14']).' '.$_POST['column15'].'='.en($_POST['row15']).' '.$_POST['column16'].'='.en($_POST['row16']).' '.$_POST['column17'].'='.en($_POST['row17']).' '.$_POST['column18'].'='.en($_POST['row18']).' '.$_POST['column19'].'='.en($_POST['row19']).' '.$_POST['column20'].'='.en($_POST['row20']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight'].' '.$_POST['columnnine'].'='.$_POST['rownine'].' '.$_POST['columnten'].'='.$_POST['rowten'].' '.$_POST['column11'].'='.$_POST['row11'].' '.$_POST['column12'].'='.$_POST['row12'].' '.$_POST['column13'].'='.$_POST['row13'].' '.$_POST['column14'].'='.$_POST['row14'].' '.$_POST['column15'].'='.$_POST['row15'].' '.$_POST['column16'].'='.$_POST['row16'].' '.$_POST['column17'].'='.$_POST['row17'].' '.$_POST['column18'].'='.$_POST['row18'].' '.$_POST['column19'].'='.$_POST['row19'].' '.$_POST['column20'].'='.$_POST['row20']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnnine" class="alphainput" type="text"> = </td>
					<td><input name="rownine" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnten" class="alphainput" type="text"> = </td>
					<td><input name="rowten" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column11" class="alphainput" type="text"> = </td>
					<td><input name="row11" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column12" class="alphainput" type="text"> = </td>
					<td><input name="row12" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column13" class="alphainput" type="text"> = </td>
					<td><input name="row13" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column14" class="alphainput" type="text"> = </td>
					<td><input name="row14" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column15" class="alphainput" type="text"> = </td>
					<td><input name="row15" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column16" class="alphainput" type="text"> = </td>
					<td><input name="row16" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column17" class="alphainput" type="text"> = </td>
					<td><input name="row17" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column18" class="alphainput" type="text"> = </td>
					<td><input name="row18" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column19" class="alphainput" type="text"> = </td>
					<td><input name="row19" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column20" class="alphainput" type="text"> = </td>
					<td><input name="row20" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "21"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']).' '.$_POST['columnnine'].'='.en($_POST['rownine']).' '.$_POST['columnten'].'='.en($_POST['rowten']).' '.$_POST['column11'].'='.en($_POST['row11']).' '.$_POST['column12'].'='.en($_POST['row12']).' '.$_POST['column13'].'='.en($_POST['row13']).' '.$_POST['column14'].'='.en($_POST['row14']).' '.$_POST['column15'].'='.en($_POST['row15']).' '.$_POST['column16'].'='.en($_POST['row16']).' '.$_POST['column17'].'='.en($_POST['row17']).' '.$_POST['column18'].'='.en($_POST['row18']).' '.$_POST['column19'].'='.en($_POST['row19']).' '.$_POST['column20'].'='.en($_POST['row20']).' '.$_POST['column21'].'='.en($_POST['row21']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight'].' '.$_POST['columnnine'].'='.$_POST['rownine'].' '.$_POST['columnten'].'='.$_POST['rowten'].' '.$_POST['column11'].'='.$_POST['row11'].' '.$_POST['column12'].'='.$_POST['row12'].' '.$_POST['column13'].'='.$_POST['row13'].' '.$_POST['column14'].'='.$_POST['row14'].' '.$_POST['column15'].'='.$_POST['row15'].' '.$_POST['column16'].'='.$_POST['row16'].' '.$_POST['column17'].'='.$_POST['row17'].' '.$_POST['column18'].'='.$_POST['row18'].' '.$_POST['column19'].'='.$_POST['row19'].' '.$_POST['column20'].'='.$_POST['row20'].' '.$_POST['column21'].'='.$_POST['row21']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnnine" class="alphainput" type="text"> = </td>
					<td><input name="rownine" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnten" class="alphainput" type="text"> = </td>
					<td><input name="rowten" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column11" class="alphainput" type="text"> = </td>
					<td><input name="row11" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column12" class="alphainput" type="text"> = </td>
					<td><input name="row12" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column13" class="alphainput" type="text"> = </td>
					<td><input name="row13" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column14" class="alphainput" type="text"> = </td>
					<td><input name="row14" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column15" class="alphainput" type="text"> = </td>
					<td><input name="row15" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column16" class="alphainput" type="text"> = </td>
					<td><input name="row16" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column17" class="alphainput" type="text"> = </td>
					<td><input name="row17" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column18" class="alphainput" type="text"> = </td>
					<td><input name="row18" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column19" class="alphainput" type="text"> = </td>
					<td><input name="row19" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column20" class="alphainput" type="text"> = </td>
					<td><input name="row20" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column21" class="alphainput" type="text"> = </td>
					<td><input name="row21" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] === "22"){
			if($_POST){
				if($_POST['enc'] === "on"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.en($_POST['rowone']).' '.$_POST['columntwo'].'='.en($_POST['rowtwo']).' '.$_POST['columnthree'].'='.en($_POST['rowthree']).' '.$_POST['columnfour'].'='.en($_POST['rowfour']).' '.$_POST['columnfive'].'='.en($_POST['rowfive']).' '.$_POST['columnsix'].'='.en($_POST['rowsix']).' '.$_POST['columnseven'].'='.en($_POST['rowseven']).' '.$_POST['columneight'].'='.en($_POST['roweight']).' '.$_POST['columnnine'].'='.en($_POST['rownine']).' '.$_POST['columnten'].'='.en($_POST['rowten']).' '.$_POST['column11'].'='.en($_POST['row11']).' '.$_POST['column12'].'='.en($_POST['row12']).' '.$_POST['column13'].'='.en($_POST['row13']).' '.$_POST['column14'].'='.en($_POST['row14']).' '.$_POST['column15'].'='.en($_POST['row15']).' '.$_POST['column16'].'='.en($_POST['row16']).' '.$_POST['column17'].'='.en($_POST['row17']).' '.$_POST['column18'].'='.en($_POST['row18']).' '.$_POST['column19'].'='.en($_POST['row19']).' '.$_POST['column20'].'='.en($_POST['row20']).' '.$_POST['column21'].'='.en($_POST['row21']).' '.$_POST['column22'].'='.en($_POST['row22']));
					echo 'Write Successful! Going To Database In 3 Seconds';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] == "off"){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$_POST['columnone'].'='.$_POST['rowone'].' '.$_POST['columntwo'].'='.$_POST['rowtwo'].' '.$_POST['columnthree'].'='.$_POST['rowthree'].' '.$_POST['columnfour'].'='.$_POST['rowfour'].' '.$_POST['columnfive'].'='.$_POST['rowfive'].' '.$_POST['columnsix'].'='.$_POST['rowsix'].' '.$_POST['columnseven'].'='.$_POST['rowseven'].' '.$_POST['columneight'].'='.$_POST['roweight'].' '.$_POST['columnnine'].'='.$_POST['rownine'].' '.$_POST['columnten'].'='.$_POST['rowten'].' '.$_POST['column11'].'='.$_POST['row11'].' '.$_POST['column12'].'='.$_POST['row12'].' '.$_POST['column13'].'='.$_POST['row13'].' '.$_POST['column14'].'='.$_POST['row14'].' '.$_POST['column15'].'='.$_POST['row15'].' '.$_POST['column16'].'='.$_POST['row16'].' '.$_POST['column17'].'='.$_POST['row17'].' '.$_POST['column18'].'='.$_POST['row18'].' '.$_POST['column19'].'='.$_POST['row19'].' '.$_POST['column20'].'='.$_POST['row20'].' '.$_POST['column21'].'='.$_POST['row21'].' '.$_POST['column22'].'='.$_POST['row22']);
					echo 'Write Successful! Going To Database';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo '
			<form method="post">
			<table>
				<tr>
					<th>Column Name</th>
					<th>Column Text</th>
				</tr>
				<tr>
					<td><input name="columnone" class="alphainput" type="text"> = </td>
					<td><input name="rowone" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columntwo" class="alphainput" type="text"> = </td>
					<td><input name="rowtwo" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnthree" class="alphainput" type="text"> = </td>
					<td><input name="rowthree" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfour" class="alphainput" type="text"> = </td>
					<td><input name="rowfour" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnfive" class="alphainput" type="text"> = </td>
					<td><input name="rowfive" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnsix" class="alphainput" type="text"> = </td>
					<td><input name="rowsix" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnseven" class="alphainput" type="text"> = </td>
					<td><input name="rowseven" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columneight" class="alphainput" type="text"> = </td>
					<td><input name="roweight" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnnine" class="alphainput" type="text"> = </td>
					<td><input name="rownine" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="columnten" class="alphainput" type="text"> = </td>
					<td><input name="rowten" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column11" class="alphainput" type="text"> = </td>
					<td><input name="row11" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column12" class="alphainput" type="text"> = </td>
					<td><input name="row12" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column13" class="alphainput" type="text"> = </td>
					<td><input name="row13" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column14" class="alphainput" type="text"> = </td>
					<td><input name="row14" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column15" class="alphainput" type="text"> = </td>
					<td><input name="row15" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column16" class="alphainput" type="text"> = </td>
					<td><input name="row16" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column17" class="alphainput" type="text"> = </td>
					<td><input name="row17" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column18" class="alphainput" type="text"> = </td>
					<td><input name="row18" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column19" class="alphainput" type="text"> = </td>
					<td><input name="row19" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column20" class="alphainput" type="text"> = </td>
					<td><input name="row20" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column21" class="alphainput" type="text"> = </td>
					<td><input name="row21" class="alphainput" type="text"></td>
				</tr>
				<tr>
					<td><input name="column22" class="alphainput" type="text"> = </td>
					<td><input name="row22" class="alphainput" type="text"></td>
				</tr>
			</table>
			Encryption? 
			<input type="radio" name="enc" value="on" checked> On
			<input type="radio" name="enc" value="off"> On<br><br>
			<input type="submit" name="add" class="alphabutton">
			</form>
			';
		}
		if($_GET['srows'] > 22){
		echo 'You cannot have more then 23 rows.';
	}
	}
	if($cfield === 1){
			echo 'You Cannot Edit Without An ID, Or With An ID Only.';
	}
	if($cfield === 2){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]]);
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 3){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]]);
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 4){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]]);
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 5){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 6){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 7){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 8){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 9){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				'.$fields[8].': <input type="text" name="'.$fields[8].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 10){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				'.$fields[8].': <input type="text" name="'.$fields[8].'" class="alphainput"><br>
				'.$fields[9].': <input type="text" name="'.$fields[9].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 11){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				'.$fields[8].': <input type="text" name="'.$fields[8].'" class="alphainput"><br>
				'.$fields[9].': <input type="text" name="'.$fields[9].'" class="alphainput"><br>
				'.$fields[10].': <input type="text" name="'.$fields[10].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 12){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.$fields[11].'='.en($_POST[$fields[11]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.$fields[11].'='.$_POST[$fields[11]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				'.$fields[8].': <input type="text" name="'.$fields[8].'" class="alphainput"><br>
				'.$fields[9].': <input type="text" name="'.$fields[9].'" class="alphainput"><br>
				'.$fields[10].': <input type="text" name="'.$fields[10].'" class="alphainput"><br>
				'.$fields[11].': <input type="text" name="'.$fields[11].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 13){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.$fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.$fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				'.$fields[8].': <input type="text" name="'.$fields[8].'" class="alphainput"><br>
				'.$fields[9].': <input type="text" name="'.$fields[9].'" class="alphainput"><br>
				'.$fields[10].': <input type="text" name="'.$fields[10].'" class="alphainput"><br>
				'.$fields[11].': <input type="text" name="'.$fields[11].'" class="alphainput"><br>
				'.$fields[12].': <input type="text" name="'.$fields[12].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 14){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.$fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.$fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				'.$fields[8].': <input type="text" name="'.$fields[8].'" class="alphainput"><br>
				'.$fields[9].': <input type="text" name="'.$fields[9].'" class="alphainput"><br>
				'.$fields[10].': <input type="text" name="'.$fields[10].'" class="alphainput"><br>
				'.$fields[11].': <input type="text" name="'.$fields[11].'" class="alphainput"><br>
				'.$fields[12].': <input type="text" name="'.$fields[12].'" class="alphainput"><br>
				'.$fields[13].': <input type="text" name="'.$fields[13].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 15){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.$fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.$fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				'.$fields[8].': <input type="text" name="'.$fields[8].'" class="alphainput"><br>
				'.$fields[9].': <input type="text" name="'.$fields[9].'" class="alphainput"><br>
				'.$fields[10].': <input type="text" name="'.$fields[10].'" class="alphainput"><br>
				'.$fields[11].': <input type="text" name="'.$fields[11].'" class="alphainput"><br>
				'.$fields[12].': <input type="text" name="'.$fields[12].'" class="alphainput"><br>
				'.$fields[13].': <input type="text" name="'.$fields[13].'" class="alphainput"><br>
				'.$fields[14].': <input type="text" name="'.$fields[14].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 16){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.$fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]).' '.$fields[15].'='.en($_POST[$fields[15]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.$fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]].' '.$fields[15].'='.$_POST[$fields[15]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				'.$fields[8].': <input type="text" name="'.$fields[8].'" class="alphainput"><br>
				'.$fields[9].': <input type="text" name="'.$fields[9].'" class="alphainput"><br>
				'.$fields[10].': <input type="text" name="'.$fields[10].'" class="alphainput"><br>
				'.$fields[11].': <input type="text" name="'.$fields[11].'" class="alphainput"><br>
				'.$fields[12].': <input type="text" name="'.$fields[12].'" class="alphainput"><br>
				'.$fields[13].': <input type="text" name="'.$fields[13].'" class="alphainput"><br>
				'.$fields[14].': <input type="text" name="'.$fields[14].'" class="alphainput"><br>
				'.$fields[15].': <input type="text" name="'.$fields[15].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 17){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.$fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]).' '.$fields[15].'='.en($_POST[$fields[15]]).' '.$fields[16].'='.en($_POST[$fields[16]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.$fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]].' '.$fields[15].'='.$_POST[$fields[15]].' '.$fields[16].'='.$_POST[$fields[16]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				'.$fields[8].': <input type="text" name="'.$fields[8].'" class="alphainput"><br>
				'.$fields[9].': <input type="text" name="'.$fields[9].'" class="alphainput"><br>
				'.$fields[10].': <input type="text" name="'.$fields[10].'" class="alphainput"><br>
				'.$fields[11].': <input type="text" name="'.$fields[11].'" class="alphainput"><br>
				'.$fields[12].': <input type="text" name="'.$fields[12].'" class="alphainput"><br>
				'.$fields[13].': <input type="text" name="'.$fields[13].'" class="alphainput"><br>
				'.$fields[14].': <input type="text" name="'.$fields[14].'" class="alphainput"><br>
				'.$fields[15].': <input type="text" name="'.$fields[15].'" class="alphainput"><br>
				'.$fields[16].': <input type="text" name="'.$fields[16].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 18){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.$fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]).' '.$fields[15].'='.en($_POST[$fields[15]]).' '.$fields[16].'='.en($_POST[$fields[16]]).' '.$fields[17].'='.en($_POST[$fields[17]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.$fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]].' '.$fields[15].'='.$_POST[$fields[15]].' '.$fields[16].'='.$_POST[$fields[16]].' '.$fields[17].'='.$_POST[$fields[17]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				'.$fields[8].': <input type="text" name="'.$fields[8].'" class="alphainput"><br>
				'.$fields[9].': <input type="text" name="'.$fields[9].'" class="alphainput"><br>
				'.$fields[10].': <input type="text" name="'.$fields[10].'" class="alphainput"><br>
				'.$fields[11].': <input type="text" name="'.$fields[11].'" class="alphainput"><br>
				'.$fields[12].': <input type="text" name="'.$fields[12].'" class="alphainput"><br>
				'.$fields[13].': <input type="text" name="'.$fields[13].'" class="alphainput"><br>
				'.$fields[14].': <input type="text" name="'.$fields[14].'" class="alphainput"><br>
				'.$fields[15].': <input type="text" name="'.$fields[15].'" class="alphainput"><br>
				'.$fields[16].': <input type="text" name="'.$fields[16].'" class="alphainput"><br>
				'.$fields[17].': <input type="text" name="'.$fields[17].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 19){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.$fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]).' '.$fields[15].'='.en($_POST[$fields[15]]).' '.$fields[16].'='.en($_POST[$fields[16]]).' '.$fields[17].'='.en($_POST[$fields[17]]).' '.$fields[18].'='.en($_POST[$fields[18]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.$fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]].' '.$fields[15].'='.$_POST[$fields[15]].' '.$fields[16].'='.$_POST[$fields[16]].' '.$fields[17].'='.$_POST[$fields[17]].' '.$fields[18].'='.$_POST[$fields[18]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				'.$fields[8].': <input type="text" name="'.$fields[8].'" class="alphainput"><br>
				'.$fields[9].': <input type="text" name="'.$fields[9].'" class="alphainput"><br>
				'.$fields[10].': <input type="text" name="'.$fields[10].'" class="alphainput"><br>
				'.$fields[11].': <input type="text" name="'.$fields[11].'" class="alphainput"><br>
				'.$fields[12].': <input type="text" name="'.$fields[12].'" class="alphainput"><br>
				'.$fields[13].': <input type="text" name="'.$fields[13].'" class="alphainput"><br>
				'.$fields[14].': <input type="text" name="'.$fields[14].'" class="alphainput"><br>
				'.$fields[15].': <input type="text" name="'.$fields[15].'" class="alphainput"><br>
				'.$fields[16].': <input type="text" name="'.$fields[16].'" class="alphainput"><br>
				'.$fields[17].': <input type="text" name="'.$fields[17].'" class="alphainput"><br>
				'.$fields[18].': <input type="text" name="'.$fields[18].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 20){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.$fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]).' '.$fields[15].'='.en($_POST[$fields[15]]).' '.$fields[16].'='.en($_POST[$fields[16]]).' '.$fields[17].'='.en($_POST[$fields[17]]).' '.$fields[18].'='.en($_POST[$fields[18]]).' '.$fields[19].'='.en($_POST[$fields[19]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.$fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]].' '.$fields[15].'='.$_POST[$fields[15]].' '.$fields[16].'='.$_POST[$fields[16]].' '.$fields[17].'='.$_POST[$fields[17]].' '.$fields[18].'='.$_POST[$fields[18]].' '.$fields[19].'='.$_POST[$fields[19]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				'.$fields[8].': <input type="text" name="'.$fields[8].'" class="alphainput"><br>
				'.$fields[9].': <input type="text" name="'.$fields[9].'" class="alphainput"><br>
				'.$fields[10].': <input type="text" name="'.$fields[10].'" class="alphainput"><br>
				'.$fields[11].': <input type="text" name="'.$fields[11].'" class="alphainput"><br>
				'.$fields[12].': <input type="text" name="'.$fields[12].'" class="alphainput"><br>
				'.$fields[13].': <input type="text" name="'.$fields[13].'" class="alphainput"><br>
				'.$fields[14].': <input type="text" name="'.$fields[14].'" class="alphainput"><br>
				'.$fields[15].': <input type="text" name="'.$fields[15].'" class="alphainput"><br>
				'.$fields[16].': <input type="text" name="'.$fields[16].'" class="alphainput"><br>
				'.$fields[17].': <input type="text" name="'.$fields[17].'" class="alphainput"><br>
				'.$fields[18].': <input type="text" name="'.$fields[18].'" class="alphainput"><br>
				'.$fields[19].': <input type="text" name="'.$fields[19].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 21){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.$fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]).' '.$fields[15].'='.en($_POST[$fields[15]]).' '.$fields[16].'='.en($_POST[$fields[16]]).' '.$fields[17].'='.en($_POST[$fields[17]]).' '.$fields[18].'='.en($_POST[$fields[18]]).' '.$fields[19].'='.en($_POST[$fields[19]]).' '.$fields[20].'='.en($_POST[$fields[20]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.$fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]].' '.$fields[15].'='.$_POST[$fields[15]].' '.$fields[16].'='.$_POST[$fields[16]].' '.$fields[17].'='.$_POST[$fields[17]].' '.$fields[18].'='.$_POST[$fields[18]].' '.$fields[19].'='.$_POST[$fields[19]].' '.$fields[20].'='.$_POST[$fields[20]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				'.$fields[8].': <input type="text" name="'.$fields[8].'" class="alphainput"><br>
				'.$fields[9].': <input type="text" name="'.$fields[9].'" class="alphainput"><br>
				'.$fields[10].': <input type="text" name="'.$fields[10].'" class="alphainput"><br>
				'.$fields[11].': <input type="text" name="'.$fields[11].'" class="alphainput"><br>
				'.$fields[12].': <input type="text" name="'.$fields[12].'" class="alphainput"><br>
				'.$fields[13].': <input type="text" name="'.$fields[13].'" class="alphainput"><br>
				'.$fields[14].': <input type="text" name="'.$fields[14].'" class="alphainput"><br>
				'.$fields[15].': <input type="text" name="'.$fields[15].'" class="alphainput"><br>
				'.$fields[16].': <input type="text" name="'.$fields[16].'" class="alphainput"><br>
				'.$fields[17].': <input type="text" name="'.$fields[17].'" class="alphainput"><br>
				'.$fields[18].': <input type="text" name="'.$fields[18].'" class="alphainput"><br>
				'.$fields[19].': <input type="text" name="'.$fields[19].'" class="alphainput"><br>
				'.$fields[20].': <input type="text" name="'.$fields[20].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield === 22){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.$fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]).' '.$fields[15].'='.en($_POST[$fields[15]]).' '.$fields[16].'='.en($_POST[$fields[16]]).' '.$fields[17].'='.en($_POST[$fields[17]]).' '.$fields[18].'='.en($_POST[$fields[18]]).' '.$fields[19].'='.en($_POST[$fields[19]]).' '.$fields[20].'='.en($_POST[$fields[20]]).' '.$fields[21].'='.en($_POST[$fields[21]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_write($_GET['db'], 'id='.en(md5(mktime())).' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.$fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]].' '.$fields[15].'='.$_POST[$fields[15]].' '.$fields[16].'='.$_POST[$fields[16]].' '.$fields[17].'='.$_POST[$fields[17]].' '.$fields[18].'='.$_POST[$fields[18]].' '.$fields[19].'='.$_POST[$fields[19]].' '.$fields[20].'='.$_POST[$fields[20]].' '.$fields[21].'='.$_POST[$fields[21]]);
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="3; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
			}
			echo ' The ID Is Automatically Generated By phpAlphaAdmin.<br>
			<form method="post">
				'.$fields[1].': <input type="text" name="'.$fields[1].'" class="alphainput"><br>
				'.$fields[2].': <input type="text" name="'.$fields[2].'" class="alphainput"><br>
				'.$fields[3].': <input type="text" name="'.$fields[3].'" class="alphainput"><br>
				'.$fields[4].': <input type="text" name="'.$fields[4].'" class="alphainput"><br>
				'.$fields[5].': <input type="text" name="'.$fields[5].'" class="alphainput"><br>
				'.$fields[6].': <input type="text" name="'.$fields[6].'" class="alphainput"><br>
				'.$fields[7].': <input type="text" name="'.$fields[7].'" class="alphainput"><br>
				'.$fields[8].': <input type="text" name="'.$fields[8].'" class="alphainput"><br>
				'.$fields[9].': <input type="text" name="'.$fields[9].'" class="alphainput"><br>
				'.$fields[10].': <input type="text" name="'.$fields[10].'" class="alphainput"><br>
				'.$fields[11].': <input type="text" name="'.$fields[11].'" class="alphainput"><br>
				'.$fields[12].': <input type="text" name="'.$fields[12].'" class="alphainput"><br>
				'.$fields[13].': <input type="text" name="'.$fields[13].'" class="alphainput"><br>
				'.$fields[14].': <input type="text" name="'.$fields[14].'" class="alphainput"><br>
				'.$fields[15].': <input type="text" name="'.$fields[15].'" class="alphainput"><br>
				'.$fields[16].': <input type="text" name="'.$fields[16].'" class="alphainput"><br>
				'.$fields[17].': <input type="text" name="'.$fields[17].'" class="alphainput"><br>
				'.$fields[18].': <input type="text" name="'.$fields[18].'" class="alphainput"><br>
				'.$fields[19].': <input type="text" name="'.$fields[19].'" class="alphainput"><br>
				'.$fields[20].': <input type="text" name="'.$fields[20].'" class="alphainput"><br>
				'.$fields[21].': <input type="text" name="'.$fields[21].'" class="alphainput"><br>
				Encryption: <input type="radio" name="enc" value="on" checked> On
				<input type="radio" name="enc" value="off"> Off<br>
				<input type="submit" name="editpost" class="alphabutton">
			</form>
			';
	}
	if($cfield > 22){
		echo 'Sorry, Databases With 23 Or More Are Not Able To Be Edited. Maybe In A Future Update.';
	}
?>
