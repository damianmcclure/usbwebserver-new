<?php

	include($_SERVER['DOCUMENT_ROOT'].'/phpAlphaDB/core.php');
	$db_name = 'example_db_changepassword';
	db_create($db_name);
	
	/*
		THIS WAS USED TO DELETE ALL USERS FROM TEST DATABASE THAT CONTAINED 'User' IN THEIR NAME
		db_rowdelete($db_name, 'username=User', true, false);
	*/
	
	if (isset($_POST['register'])) {
		$username = str_replace(' ', '_', $_POST['username']);
		$password = str_replace(' ', '_', $_POST['password']);
		if ($username !== '' && $password !== '' && valid_name($username)) {
			//username and password is specified
			$success = db_write($db_name, 'username='.printsafe($username).' password='.md5('somecrappysalt'.$password));
		} else {
			
		}
	}
	
	if (isset($_POST['login'])) {
		$username = str_replace(' ', '_', $_POST['username']);
		$password = str_replace(' ', '_', $_POST['password']);
		if ($username !== '' && valid_name($username)) {
			//username and password is specified
			$results = db_read($db_name, 'username='.$username, 'username password');
			$logged_in = false;
			foreach ($results as $result) {
				$data_user = db_column($result, 0);
				$data_pass = db_column($result, 1);
				if ($data_user == $username && $data_pass == md5('somecrappysalt'.$password)) { $logged_in = true; break; }
			}
			if ($logged_in) {
				die("Logged in as <b>".$username."</b>.");
			} else {
				die("Login failed!");
			}
			
		} else {
			
		}
	}
		
		$action = $_GET['action'];
		if ($action == 'delete') {
			$user = $_GET['user'];
			$success = db_rowdelete($db_name, 'username='.$user);
			header("Location: 2.php");
		}
		if ($action == 'changepass') {
			$user = $_GET['user'];
			$success = db_rewrite($db_name, 'username='.$user.' password='.md5('somecrappysalt', ''));
			header("Location: 2.php");
		}
	
?>

<html>
	<head>
		<title>Example 2</title>
		<style>
			body {
				margin: 20px;
				font-size: 20px;
				color: black;
				font-family: Verdana, Geneva, sans-serif;
			}
		</style>
	</head>
	<body>
	
		<form method="post" name="login">
			<table width="600">
				<tr style="background-color: magenta;">
					<td colspan="2">Test login</td>
				</tr>
				<tr>
					<td>Username:</td> <td><input type="text" name="username" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Password:</td> <td><input type="password" name="password" autocomplete="off"></td>
				</tr>
				<tr>
					<td></td> <td><input type="submit" name="login" value="Login"></td>
				</tr>
			</table>
		</form>
	
		<form method="post" name="register">
			<table width="600">
				<tr style="background-color: orange;">
					<td colspan="2">Create new user</td>
				</tr>
				<tr>
					<td>Username:</td> <td><input type="text" name="username" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Password:</td> <td><input type="password" name="password" autocomplete="off"></td>
				</tr>
				<tr>
					<td></td> <td><input type="submit" name="register" value="Create"></td>
				</tr>
			</table>
		</form>
		
		<br>
		
			<table width="600">
				<tr style="background-color: lightblue;">
					<td colspan="2">List of users</td>
				</tr>
				<?php
					$results = db_read($db_name, '', 'username password'); //simple query to our database
					foreach ($results as $result) { //loop through results
						$username = db_column($result, 0); //get first item we asked (username)
						//$password = db_column($result, 1); //get second item we asked (password hash, we do not actually use it here)
						$options = '<a href="2.php?action=delete&user='.$username.'"><button>Delete</button></a>
						<a href="2.php?action=changepass&user='.$username.'"><button>Set no password</button></a>';
						echo '<tr><td>'.$username.'</td><td>'.$options.'</td></tr>';
					}
				?>
			</table>
		
	</body>
</html>