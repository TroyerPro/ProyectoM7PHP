        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div data-spy="affix" data-offset-top="45" data-offset-bottom="90">
          <div class="nav" id="sidebar-nav">
               <img class="navbar-brand" src="img/blancoynegro2.png" style="width:200px; height:200px;"></img>     
           </div>
            <ul class="nav" id="sidebar-nav">
              <?php $fit=basename($_SERVER['PHP_SELF']);
              ?>        

              <li><a href="../controller/consultarObras.php" onclick="return avisar('<?php echo $fit?>')"?>Inicio</a></li>
              <!--<li><a href="../controller/modificarActor.php" onclick="return avisar('<?php echo $fit?>')">Modificar actor</a></li>-->
              <li><a href="crearActor.php" onclick="return avisar('<?php echo $fit?>')">Nuevo actor</a></li>
              <li><a href="../controller/consultarActor.php" onclick="return avisar('<?php echo $fit?>')">Ver todos los actores</a></li>
              <li><a href="consultarActor.php" onclick="return avisar('<?php echo $fit?>')">Buscar actor</a></li>
              <li><a href="crearDirector.php" onclick="return avisar('<?php echo $fit?>')">Nuevo director</a></li>
              <li><a href="../controller/consultarDirector.php" onclick="return avisar('<?php echo $fit?>')">Ver todos los directores</a></li>
              <li><a href="consultarDirector.php" onclick="return avisar('<?php echo $fit?>')">Buscar director</a></li>
              <li><a href="crearObra.php" onclick="return avisar('<?php echo $fit?>')">Nueva obra</a></li>
              <!--<li><a href="../controller/consultarObras.php" onclick="return avisar('<?php echo $fit?>')">Ver todas las obras</a></li>-->
              <li><a href="verObra.php" onclick="return avisar('<?php echo $fit?>')">Buscar obra</a></li>
              <li><a href="logout.php" onclick="alert('Adios')">Logout</a></li> 
            </ul>
           </div>
        </div>