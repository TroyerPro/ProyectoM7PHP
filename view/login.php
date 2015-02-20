<?php
session_start();
include "../controller/validaciones/session/valSession.php";
if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
	header("Location: ../index.php");
}
$userC = "";
$passC = "";

if (isset($_COOKIE['user'])) {
	$userC = $_COOKIE['user'];
}

if (isset($_COOKIE['pass'])) {
	$passC = $_COOKIE['pass'];
}

if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])) {
	$correcto = valAdmin(($_COOKIE["user"]), $_COOKIE["pass"]);
	if ($correcto) {
		$_SESSION['user'] = $_COOKIE['user'];
		$_SESSION['password'] = $_COOKIE['pass'];
	}
}

if (isset($_REQUEST['user']) && isset($_REQUEST['password'])) {

	$correcto = valAdmin($_REQUEST['user'], $_REQUEST['password']);
	if (!$correcto) {
		$correcto = valSecretario($_REQUEST['user'], $_REQUEST['password']);
	}

	if ($correcto) {

		if (isset($_REQUEST['usersave'])) {
			setcookie("user", $_REQUEST['user'], time() + 360);
		} else {
			if (isset($_COOKIE['user'])) {
				setcookie("user", "", time() - 360);
			}
		}

		if (isset($_REQUEST['passave'])) {
			setcookie("pass", $_REQUEST['password'], time() + 360);
		} else {
			if (isset($_COOKIE['pass'])) {
				setcookie("pass", "", time() - 360);
			}
		}
		$_SESSION['user'] = $_REQUEST['user'];
		$_SESSION['password'] = $_REQUEST['password'];
		header("Location: ../index.php");
	} else {
		session_unset();
		header("login.php");
	}
}
?>

<html>
	<?php
	include "../controller/addBoostrap.php";
	?>
	<body>
		<div class="col-xs-12">
			<div class="col-xs-12" style="width: 1240px; height:150px;">
				
			</div>
			<div class="col-xs-3">
				<div class="panel panel-primary">...</div>
				<div class="panel panel-success">...</div>
				<div class="panel panel-info">...</div>
				<div class="panel panel-warning">...</div>
				<div class="panel panel-danger">...</div>
			</div>
			<div class="col-xs-6">
				<form action="login.php" method="post">
					User
					<input type="text" name="user" value="<?php echo $userC; ?>"/>
					Guardar user
					<input type="checkbox" name="usersave" value="1">
					</input>
					<br/>
					Password
					<input type="password" name="password" value="<?php echo $passC; ?>">
					Guardar password
					<input type="checkbox" name="passave" value="1">
					</input>
					<br/>
					<input type="submit" name="login" value="Login"/>
				</form>
			</div>
		</div>
	</body>
</html>