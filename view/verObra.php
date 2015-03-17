<?php
session_start();
include "../controller/validaciones/session/valSession.php";
include "../controller/addBoostrap.php";
?>

	<head>
		<meta charset="UTF-8">
		<script type="text/javascript" src="js/navegacion.js">
		</script>
	</head>
	<body style=" background: none repeat scroll 0 0 #1e1e1e;">
	<div class="page-container">
    <?php include "menu_superior.php" ?>

    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">
      <?php include "menu_lateral.php" ?>
        <!-- -->
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

				</div></div></div></div>
			</div>
		</div>
	</div></div>
	</body>
</html>

