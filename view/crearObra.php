<?php
session_start();
require_once "../controller/addBoostrap.php";
require_once "../controller/consultarGeneros.php";
//Adry
require_once  "../model/businessLayer/Class_Agencia.php";

include "../controller/validaciones/session/valSession.php";

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
							<form action="../controller/insertarObra.php" method="post">
<br/>
	<input  class="form-control" placeholder="Nombre" type="text" name="nombre">
	</input>
	<br/>
	Genero:
	<select class="form-control" name="genero">
		<?php
		imprimirGeneros();
		?>
	</select>
	<br/>
	<input class="form-control" placeholder="Fecha incio" type="text" name="fechaInicio">
	</input>
	<br/>
	<input class="form-control" placeholder="Fecha final" type="text" name="fechaFinal">
	</input>
	<br/>
	<!--   Adry   -->
	<div class="form-group">
		<label>Actores principales</label><br>
		<label style="padding-right:5%;">
		<?php
			$agencia = unserialize($_SESSION['agencia']);
			$actor=$agencia->getArrayActores();
			for ($i = 0; $i<count($actor); $i++){
				echo "<input type='checkbox' name='actores_principales' value='".($actor[$i]->getNombre())."'></input>".($actor[$i]->getNombre())."<br>";
				if((($i+1)%5) == 0 && ($i+1) != 0) {
					echo "</label><label  style='padding-right:5%;'>";
				}
			}
		?>
		</div>
	<div class="form-group">
		<label>Actores secundarios</label><br>
		<label style="padding-right:5%;">
		<?php
			for ($i = 0; $i<count($actor); $i++){
				echo "<input type='checkbox' name='actores_secundarios' value='".($actor[$i]->getNombre())."'></input>".($actor[$i]->getNombre())."<br>";
				if((($i+1)%5) == 0 && ($i+1) != 0) {
					echo "</label><label  style='padding-right:5%;'>";
				}
			}
		?>
		</label>
	</div>

	<div class="form-group">
		<label>Director</label><br>
		<select name="opcion" class="btn btn-default dropdown-toggle">
			<?php
				$director=$agencia->getArrayDirectores();
				echo count($director);
				for ($i=0; $i <count($director) ; $i++) { 	
					echo "<option name='director' value='".($director[$i]->getNombre())."''>".($director[$i]->getNombre())."</option>";
				}	
			?>			
		</select>
		</div>
	</div>
	<!-- ##################################################### -->
	<input type="submit"  class="btn btn-default" value="enviar"/>
	<input type="reset" class="btn btn-default" value="cancelar"/>
</form>

	
				</div></div></div></div>
			</div>
		</div>
	</div></div>
	</body>
<div class="col-xs-8 col-xs-offset-2">

</div>