<?php
if(isset($_REQUEST['logout'])) {
session_unset();
	
	/*
if (isset($_COOKIE['user'])){
setcookie("user", "",- 360);	
}
	
if (isset($_COOKIE['pass'])){
setcookie("pass", "", time() - 360);	
}	*/
	
?>
<br/>
	<div class="col-xs-2 alert alert-success" role="alert">
	  <a href="#" class="alert-link">Hasta luego!</a>
	</div>
<br/>
<?php } else { ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

	<input class="btn btn-xs btn-primary active" type="submit" name="logout" value="logout"/>
</from>

<?php } ?>
