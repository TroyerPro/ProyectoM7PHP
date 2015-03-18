<?php include "addBoostrap.php"; ?>
<html>
	<head>
		<meta charset="UTF-8">
		<script type="text/javascript" src="../view/js/navegacion.js">
		</script>
    <link href="../view/css/styles.css" rel="stylesheet">
<link href="../view/css/bootstrap.min.css" rel="stylesheet">
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
          <div class="nav" id="sidebar-nav">
               <img class="navbar-brand" src="../view/img/blancoynegro2.png" style="width:200px; height:200px;"></img>     
           </div>
            <ul class="nav" id="sidebar-nav">
              <?php $fit=basename($_SERVER['PHP_SELF']);
              ?>        

              <li><a href="../view/seleccionarAccion.php" onclick="return avisar('<?php echo $fit?>')"?>Home</a></li>
              <!--<li><a href="../controller/modificarActor.php" onclick="return avisar('<?php echo $fit?>')">Modificar actor</a></li>-->
              <li><a href="../view/crearActor.php" onclick="return avisar('<?php echo $fit?>')">Nuevo actor</a></li>
              <li><a href="../view/consultarActor.php" onclick="return avisar('<?php echo $fit?>')">Buscar actor</a></li>
              <li><a href="../view/crearDirector.php" onclick="return avisar('<?php echo $fit?>')">Nuevo director</a></li>
              <li><a href="#" onclick="return avisar('<?php echo $fit?>')">Buscar director</a></li>
              <li><a href="../view/crearObra.php" onclick="return avisar('<?php echo $fit?>')">Nueva obra</a></li>
              <li><a href="consultarObras.php" onclick="return avisar('<?php echo $fit?>')">Ver todas las obras</a></li>
              <li><a href="../view/verObra.php" onclick="return avisar('<?php echo $fit?>')">Buscar obra</a></li>
              <li><a href="../view/logout.php" onclick="alert('Adios')">Logout</a></li> 
            </ul>
           </div>
        </div>
        <!-- -->
                <div class="col-xs-12 col-sm-9" data-spy="scroll" data-target="#sidebar-nav">
                <div class="row"><div class="col-sm-6"><div class="panel panel-default"><div class="panel-body">







<!-- ################################################################################################################ -->