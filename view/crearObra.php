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

  <script language="JavaScript" type="text/JavaScript" src = "js/JSfuncions.js"></script>
   <script language="JavaScript" type="text/JavaScript" src = "js/jquery-1.11.2.min.js"></script>
    <!-- calendar stylesheet -->
  <link rel="stylesheet" type="text/css" media="all" href="js/jscalendar/calendar-win2k-cold-1.css" title="win2k-cold-1" />

  <!-- main calendar program -->
  <script type="text/javascript" src="js/jscalendar/calendar.js"></script>

  <!-- language for the calendar -->
  <script type="text/javascript" src="js/jscalendar/lang/calendar-es.js"></script>

  <!-- the following script defines the Calendar.setup helper function, which makes
       adding a calendar a matter of 1 or 2 lines of code. -->
  <script type="text/javascript" src="js/jscalendar/calendar-setup.js"></script>


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
		$agencia = unserialize($_SESSION['agencia']);
		imprimirGeneros($agencia->getGeneros());
		?>
	</select>
	<br/>
	<p>Fecha de inicio (dd/mm/aaaa)
				<input type="text" name="data1" id="data1"> <button type="reset" id="boto1">...</button>
				<br>
			    </p>
	<br/>
	<p>Fecha de final (dd/mm/aaaa)
				<input type="text" name="data2" id="data2"> <button type="reset" id="boto2">...</button>
				<br>
			    </p>
	<br/>
	<br/>
	<div class="form-group">
		<label>Actores principales</label><br>
		<div style="display:inline-flex; width:100%;">
			<div style='display:inline;'>
		<?php
		$salto=0;
			$agencia = unserialize($_SESSION['agencia']);
			$actor=$agencia->getArrayActores();
			for ($i = 0; $i<count($actor); $i++){
				if ($actor[$i]->getPrincipal()==1) {
					echo "<input type='checkbox' name='actores_principales[". $i ."]' value='".($actor[$i]->getNombre())."'></input>".($actor[$i]->getNombre())."</br>";
					if((($salto+1)%5) == 0 && ($salto+1) != 0) {
						echo "</div></br><div  style='display:inline; margin-right:5%;'>";
					}
					$salto+=1;
				}
			}
		?>
	</div>
		</div>
	<div class="form-group">
		<label>Actores secundarios</label><br>
		<div style="display:inline-flex; width:100%;">
						<div style='display:inline;'>
		<?php
		$salto=0;
			for ($i = 0; $i<count($actor); $i++){
				if ($actor[$i]->getPrincipal()==0) {
					echo "<input type='checkbox' name='actores_principales[". $i ."]' value='".($actor[$i]->getNombre())."'></input>".($actor[$i]->getNombre())."</br>";
					if((($salto+1)%5) == 0 && ($salto+1) != 0) {
						echo "</div></br><div  style='display:inline; margin-right:5%;'>";
					}
					$salto+=1;
				}
			}
		?>
		</div>
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

<script type="text/javascript">
    Calendar.setup({
        inputField     :    "data1",      // id of the input field
        ifFormat       :    "%d-%m-%Y",   // format of the input field
        showsTime      :    false,         // will display a time selector
        button         :    "boto1",      // trigger for the calendar (button ID)
        singleClick    :    false,        // double-click mode
        step           :    1             // show all years in drop-down boxes (instead of every other year as default)
    });
        Calendar.setup({
        inputField     :    "data2",      // id of the input field
        ifFormat       :    "%d-%m-%Y",   // format of the input field
        showsTime      :    false,         // will display a time selector
        button         :    "boto2",      // trigger for the calendar (button ID)
        singleClick    :    false,        // double-click mode
        step           :    1             // show all years in drop-down boxes (instead of every other year as default)
    });




</script>
