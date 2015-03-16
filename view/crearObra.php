<?php
session_start();
require_once "../controller/addBoostrap.php";
require_once "../controller/consultarGeneros.php";


include "../controller/validaciones/session/valSession.php";

?>

	<head>
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
	<div class="form-group">
		<label>Actores principales</label><br>
		<div style="padding-right:5%;">
		<?php
		for ($i = 0; $i<15; $i++){
			echo "<input type='checkbox' value='Actor".($i+1)."'></input>Actor".($i+1)."";
			if((($i+1)%5) == 0 && ($i+1) != 0) {
				echo "</div><div  style='padding-right:5%;'>";
			}
		}
		?>
		</div>
	</div>
	<div class="form-group">
		<label>Actores secundarios</label><br>
		<label style="padding-right:5%;">
		<?php
		for ($i = 0; $i<15; $i++){
			echo "<input type='checkbox' value='Actor".($i+1)."'></input>Actor".($i+1)."<br>";
			if((($i+1)%5) == 0 && ($i+1) != 0) {
				echo "</label><label  style='padding-right:5%;'>";
			}
		}
		?>
		</label>
	</div>
	<br/>
	<textarea class="form-control" placeholder="Actores secundarios" name="actores_secundarios" COLS=40 ROWS=6></textarea>
	<br/>
	<input class="form-control" placeholder="Director" type="text" name="director">
	</input>
	<br/>
	<input type="submit" value="enviar"/>
	<input type="reset" value="cancelar"/>
</form>

	
				</div></div></div></div>
			</div>
		</div>
	</div></div>
	</body>

	



<div class="col-xs-8 col-xs-offset-2">

</div>