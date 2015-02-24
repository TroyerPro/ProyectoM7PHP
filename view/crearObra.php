<?php
session_start();
require_once "../controller/addBoostrap.php";
require_once "../controller/consultarGeneros.php";
require_once "../controller/validaciones/session/valSession.php";


if(cualquierUser($_SESSION['user'],$_SESSION['password'])) {
?>


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
							<form action="../controller/insertarObra.php" method="post">
<br/>
	Nombre:
	<input type="text" name="nombre">
	</input>
	<br/>
	Genero:
	<select name="genero">
		<?php
		imprimirGeneros();
		?>
	</select>
	<br/>
	//Pendiente validar fecha inicio > fecha hoy
	Fecha incio
	<input type="text" name="fechaInicio">
	</input>
	<br/>
	//Pendiente validar fecha final > fecha inicio
	Fecha final
	<input type="text" name="fechaFinal">
	</input>
	<br/>
	Actores principales
	<textarea name="actores_principales" COLS=40 ROWS=6/>
	</textarea>
	<br/>
	Actores secundarios
	<textarea name="actores_secundarios" COLS=40 ROWS=6></textarea>
	<br/>
	Director
	<input type="text" name="director">
	</input>
	<br/>
	<input type="submit" value="enviar"/>
	<input type="reset" value="cancelar"/>
</form>

<?php
include "../view/logout.php";
 } else {
	//header("Location:login.php");
	echo "error";
	}

?>
				
				</div></div></div></div>
			</div>
		</div>
	</div></div>
	</body>

	



<div class="col-xs-8 col-xs-offset-2">


<a href="../index.php">Inicio</a>
</div>