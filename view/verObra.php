<?php
session_start();
include "../controller/validaciones/session/valSession.php";
include "../controller/addBoostrap.php";
?>
<html>
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
      <?php include "menu_lateral.php" ?>
                <div class="col-xs-12 col-sm-9" data-spy="scroll" data-target="#sidebar-nav">
                <div class="row"><div class="col-sm-6"><div class="panel panel-default"><div class="panel-body">


<form action="../controller/verObra.php" method="post">
	<div name="arribaForm">
		Ver obra
	</div>
	ID obra:
	<input type="text" name="idObra">
	</input></br>
	<input type="submit" value="enviar"/>
	<input type="reset" value="cancelar"/>
</form>

<?php
include "../view/logout.php";

?>
				</div></div></div></div>
			</div>
		</div>
	</div></div>
	</body>
</html>
