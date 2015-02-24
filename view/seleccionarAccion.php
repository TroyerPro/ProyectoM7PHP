<?php
session_start();
require_once "../controller/validaciones/session/valSession.php";
require_once "../model/businessLayer/Class_Agencia.php";
require_once "../controller/addBoostrap.php";


if(cualquierUser(($_SESSION['user']),$_SESSION['password'])) { ?>
<html>
	<head>
	<meta charset="UTF-8">
</head>
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
              <li><a href="seleccionarAccion.php">Home</a></li>

            </ul>
           </div>
        </div>
        <!-- -->
                <div class="col-xs-12 col-sm-9" data-spy="scroll" data-target="#sidebar-nav">
                <div class="row"><div class="col-sm-6"><div class="panel panel-default"><div class="panel-body">

				<form action="../controller/roads.php" method="POST">
                 <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Selecciona una acción</h4></div>
					<br/>
					<select name="opcion" class="btn btn-default dropdown-toggle">
						<?php if(valAdmin(($_SESSION['user']), $_SESSION['password'])) {
						?>
						<option value="../view/crearObra.php"> Crear una obra nueva. </option>
						<option value="../view/modificarActor.php"> Modificar actor </option>
						<?php } ?>
						<option value="../view/consultarActor.php">Consultar actor. </option>
						<option value="../view/crearActor.php">Crear Actor</option>
						<option value="../view/crearDirector.php">Crear Director</option>
						<option value="mostrarDirector.php">Mostrar Director</option>
						<option value="consultarObras.php">Mostrar TODAS las obras</option>
						<option value="mostrarPersonas.php">Mostrar TODAS las personas</option>
					</select>
					<button type="submit" class="btn btn-default"> GO GO GO
					</button>
				</form>
				
					<?php
				include "logout.php";
					?>
				<a href="../index.php">Inicio</a>
				</div></div></div></div>
			</div>
		</div>
	</div></div>
	</body>
</html>
<?php } else {
	header("Location:../index.php");
	}
?>

