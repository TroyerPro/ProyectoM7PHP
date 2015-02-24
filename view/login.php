<?php
session_start();
require_once "../model/businessLayer/Class_Agencia.php";
include "../controller/validaciones/session/valSession.php";
include "../controller/addBoostrap.php";

if(!isset($_SESSION['agencia'])){
		$agencia = new Agencia("Pokelab","C/ Vallbona n127","93 014 014");
		$_SESSION['agencia']=serialize($agencia);
		$agencia->populateAgencia();

}else {
		$agencia = unserialize($_SESSION['agencia']);	
}

if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
	header("Location: seleccionarAccion.php");
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
		header("Location: seleccionarAccion.php");
	} else {
		session_unset();
		header("login.php");
	}
}


?>

<html>
	<body>
	<body style=" background: none repeat scroll 0 0 #1e1e1e;">
	<div class="page-container">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">Proyecto PHP</a>
    	</div>
    </nav>

    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div data-spy="affix" data-offset-top="45" data-offset-bottom="90">
            <ul class="nav" id="sidebar-nav">
              <li><a href="index.php">Home</a></li>

            </ul>
           </div>
        </div>
        <!-- -->
                <div class="col-xs-12 col-sm-9" data-spy="scroll" data-target="#sidebar-nav">
                <div class="row"><div class="col-sm-6"><div class="panel panel-default"><div class="panel-body">
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
				
				</div></div></div></div>
			</div>
		</div>
	</div></div>
	</body>
</html>