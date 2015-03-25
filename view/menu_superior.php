<? include_once "../model/businessLayer/Class_User.php"; ?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="navbar-header col-xs-3">
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">

           </button>
           <a class="navbar-brand" href="#">Proyecto PHP</a>
          
    	</div>

      <div class="navbar-header col-xs-2 col-xs-offset-7">
          <?php
          if(isset($_SESSION['user'])) 
            $user = unserialize($_SESSION['user']);
              echo " <a class='navbar-brand' href='#''>Bienvenido ".$user->getUsername()."</a>"
          ?>
       </div>
    </nav>