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

	if($cfield === 1){
			echo 'You Cannot Edit Without An ID, Or With An ID Only. Going Back.';
		?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
	}
	if($cfield === 2){
			if($_POST){
				if($_POST['enc'] === 'on'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.$fields[11].'='.en($_POST[$fields[11]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.$fields[11].'='.$_POST[$fields[11]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.
							   $fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.
							   $fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.
							   $fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.
							   $fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.
							   $fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.
							   $fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.
							   $fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]).' '.$fields[15].'='.en($_POST[$fields[15]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.
							   $fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]].' '.$fields[15].'='.$_POST[$fields[15]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.
							   $fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]).' '.$fields[15].'='.en($_POST[$fields[15]])
							   .' '.$fields[16].'='.en($_POST[$fields[16]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.
							   $fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]].' '.$fields[15].'='.$_POST[$fields[15]]
							   .' '.$fields[16].'='.$_POST[$fields[16]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.
							   $fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]).' '.$fields[15].'='.en($_POST[$fields[15]])
							   .' '.$fields[16].'='.en($_POST[$fields[16]]).' '.$fields[17].'='.en($_POST[$fields[17]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.
							   $fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]].' '.$fields[15].'='.$_POST[$fields[15]]
							   .' '.$fields[16].'='.$_POST[$fields[16]].' '.$fields[17].'='.$_POST[$fields[17]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.
							   $fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]).' '.$fields[15].'='.en($_POST[$fields[15]])
							   .' '.$fields[16].'='.en($_POST[$fields[16]]).' '.$fields[17].'='.en($_POST[$fields[17]]).' '.$fields[18].'='.en($_POST[$fields[18]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.
							   $fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]].' '.$fields[15].'='.$_POST[$fields[15]]
							   .' '.$fields[16].'='.$_POST[$fields[16]].' '.$fields[17].'='.$_POST[$fields[17]].' '.$fields[18].'='.$_POST[$fields[18]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.
							   $fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]).' '.$fields[15].'='.en($_POST[$fields[15]])
							   .' '.$fields[16].'='.en($_POST[$fields[16]]).' '.$fields[17].'='.en($_POST[$fields[17]]).' '.$fields[18].'='.en($_POST[$fields[18]]).' '.$fields[19].'='.en($_POST[$fields[19]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.
							   $fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]].' '.$fields[15].'='.$_POST[$fields[15]]
							   .' '.$fields[16].'='.$_POST[$fields[16]].' '.$fields[17].'='.$_POST[$fields[17]].' '.$fields[18].'='.$_POST[$fields[18]].' '.$fields[19].'='.$_POST[$fields[19]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.
							   $fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]).' '.$fields[15].'='.en($_POST[$fields[15]])
							   .' '.$fields[16].'='.en($_POST[$fields[16]]).' '.$fields[17].'='.en($_POST[$fields[17]]).' '.$fields[18].'='.en($_POST[$fields[18]]).' '.$fields[19].'='.en($_POST[$fields[19]]).' '.$fields[20].'='.en($_POST[$fields[20]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.
							   $fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]].' '.$fields[15].'='.$_POST[$fields[15]]
							   .' '.$fields[16].'='.$_POST[$fields[16]].' '.$fields[17].'='.$_POST[$fields[17]].' '.$fields[18].'='.$_POST[$fields[18]].' '.$fields[19].'='.$_POST[$fields[19]].' '.$fields[20].'='.$_POST[$fields[20]]);
				}
			}
			echo '
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
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.en($_POST[$fields[1]]).' '.$fields[2].'='.en($_POST[$fields[2]]).' '.$fields[3].'='.en($_POST[$fields[3]]).' '.$fields[4].'='.en($_POST[$fields[4]]).' '.$fields[5].'='.en($_POST[$fields[5]]).' '.$fields[6].'='.en($_POST[$fields[6]]).' '.$fields[7].'='.en($_POST[$fields[7]]).' '.$fields[8].'='.en($_POST[$fields[8]]).' '.$fields[9].'='.en($_POST[$fields[9]]).' '.$fields[10].'='.en($_POST[$fields[10]]).' '.
							   $fields[11].'='.en($_POST[$fields[11]]).' '.$fields[12].'='.en($_POST[$fields[12]]).' '.$fields[13].'='.en($_POST[$fields[13]]).' '.$fields[14].'='.en($_POST[$fields[14]]).' '.$fields[15].'='.en($_POST[$fields[15]])
							   .' '.$fields[16].'='.en($_POST[$fields[16]]).' '.$fields[17].'='.en($_POST[$fields[17]]).' '.$fields[18].'='.en($_POST[$fields[18]]).' '.$fields[19].'='.en($_POST[$fields[19]]).' '.$fields[20].'='.en($_POST[$fields[20]]).' '.$fields[21].'='.en($_POST[$fields[21]]));
					echo 'Success. Returning To Database.';
					?> <meta http-equiv="refresh" content="2; url=control.php?db=<?php echo $_GET['db'];?>"> <?php
				}
				if($_POST['enc'] === 'off'){
					db_rewrite($_GET['db'], 'id='.$_GET['string'].' '.$fields[1].'='.$_POST[$fields[1]].' '.$fields[2].'='.$_POST[$fields[2]].' '.$fields[3].'='.$_POST[$fields[3]].' '.$fields[4].'='.$_POST[$fields[4]].' '.$fields[5].'='.$_POST[$fields[5]].' '.$fields[6].'='.$_POST[$fields[6]].' '.$fields[7].'='.$_POST[$fields[7]].' '.$fields[8].'='.$_POST[$fields[8]].' '.$fields[9].'='.$_POST[$fields[9]].' '.$fields[10].'='.$_POST[$fields[10]].' '.
							   $fields[11].'='.$_POST[$fields[11]].' '.$fields[12].'='.$_POST[$fields[12]].' '.$fields[13].'='.$_POST[$fields[13]].' '.$fields[14].'='.$_POST[$fields[14]].' '.$fields[15].'='.$_POST[$fields[15]]
							   .' '.$fields[16].'='.$_POST[$fields[16]].' '.$fields[17].'='.$_POST[$fields[17]].' '.$fields[18].'='.$_POST[$fields[18]].' '.$fields[19].'='.$_POST[$fields[19]].' '.$fields[20].'='.$_POST[$fields[20]].' '.$fields[21].'='.$_POST[$fields[21]]);
				}
			}
			echo '
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
