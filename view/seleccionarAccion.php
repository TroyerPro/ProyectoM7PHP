<?php
session_start();

require_once "../model/businessLayer/Class_Agencia.php";
require_once "../model/businessLayer/Class_User.php";
require_once "../controller/addBoostrap.php";
include "../controller/validaciones/session/valSession.php";
?>
<html>
	<head>
	<meta charset="UTF-8">
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

				<form action="../controller/roads.php" method="POST">
                 <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Selecciona una acción</h4></div>
					<br/>
					<select name="opcion" class="btn btn-default dropdown-toggle">
						<option value="../view/crearObra.php"> Crear una obra nueva. </option>
						<option value="../view/modificarActor.php"> Modificar actor </option>
						<!--<option value="../view/consultarActor.php">Consultar actor. </option>-->
						<option value="../view/crearActor.php">Crear Actor</option>
						<option value="../view/crearDirector.php">Crear Director</option>
						<!--<option value="mostrarDirector.php">Mostrar Director</option>-->
						<option value="../view/verObra.php">Ver obra</option>
						<option value="consultarObras.php">Mostrar TODAS las obras</option>
						<option value="consultarActor.php">Mostrar Actores</option>
						<option value="../../librerias/">GridView llibreria Adobe</option>
					</select>
					<button type="submit" class="btn btn-default"> GO GO GO
					</button>
				</form>

				</div></div></div></div>
			</div>
		</div>
	</div></div>
	</body>
</html>
