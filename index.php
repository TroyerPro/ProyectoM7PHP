<html>
	<head>
	<meta charset="UTF-8">
<link href="view/css/styles.css" rel="stylesheet">
<link href="view/css/bootstrap.min.css" rel="stylesheet">
<script src="view/js/jquery-1.11.2.min.js"></script>
<script>

$( document ).ready(function(){
	jQuery.ajax({
		url: 'controller/procesarComentario.php',
		data: {
		},
		success:function (data) {
			var newColor = '#'+(0x1000000+(Math.random())*0xffffff).toString(16).substr(1,6);
			var html2 = "";
				for(var i = 0; data.length > i; i++) {
					newColor = '#'+(0x1000000+(Math.random())*0xffffff).toString(16).substr(1,6);
					newColor2 = '#'+(0x1000000+(Math.random())*0xffffff).toString(16).substr(1,6);
					html2 = "<div class='col-xs-12' style='background-color: "+newColor+";color: "+newColor2+"'><b>"+data[i].nombre+"</b></div>"+"<div class='col-xs-12' style='background-color: "+newColor+";color: "+newColor2+"; opacity:0.8;'>"+data[i].comentario+"</div><br>"+html2
				}
				$("#top_comentarios").html(html2);
			$("#c_nombre").val('');
			$("#c_comentario").val('');
			},
		type: 'GET',
		dataType: "json",
	});

$("#paco").click(function(){
	  var a = $("#c_nombre").val();
		var b = $("#c_comentario").val();
	jQuery.ajax({
	   url: 'controller/procesarComentario.php',
	   data: {
	    "nombre":a,
			"comentario":b
	   },
	  success:function (data) {
			var html2 = "";
			newColor = '#'+(0x1000000+(Math.random())*0xffffff).toString(16).substr(1,6);
			newColor2 = '#'+(0x1000000+(Math.random())*0xffffff).toString(16).substr(1,6);
				for(var i = 0; data.length > i; i++) {
					html2 = "<div class='col-xs-12' style='background-color: "+newColor+";color: "+newColor2+"'><b>"+data[i].nombre+"</b></div>"+"<div class='col-xs-12' style='background-color: "+newColor+";color: "+newColor2+"; opacity:0.8;'>"+data[i].comentario+"</div><br>"+html2
				}
			$("#top_comentarios").html(html2);
			alert("Su opinión ha sido directamente almacenada en la basura. Gracias.");
			$("#c_nombre").val('');
			$("#c_comentario").val('');
	    },
	   type: 'GET',
	   dataType: "json",
	});

});
});
</script>
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
           <a class="navbar-brand" href="#">XIII Industries</a>
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
          <div class="row"><div class="col-sm-12">
							<div class="panel panel-default col-xs-6"><div class="panel-body">
							<form action="view/login.php" method="POST">
			                 <div class="panel-heading"><a href="#" class="pull-right"></a> <h4>Bienvenido</h4></div>
								Acceda con su usuario <button type="submit" class="btn btn-default"> AQUÍ </button>
							</form>
							</div>
						</div>

					<div class="panel panel-default col-xs-4 col-xs-offset-2">
						<div class="panel-body">
						<div class="panel-heading"><a href="#" class="pull-right"></a> <h4>Escribe tu comentario</h4></div>

						<form method="POST" onsubmit="return false;">
						<input type="text" placeholder="Nombre" id="c_nombre"> </input></br>
						Comentario: </br>
						<textarea type="text" class="col-xs-12" id="c_comentario" style="height:50px;"> </textarea>

						<button id="paco" class="btn btn-default"> Enviar </button>
						</form>

						<div class="panel-heading"><a href="#" class="pull-right"></a> <h4>Top comentarios</h4></div>
						<div id="top_comentarios"></div>
					</div>
				</div>


				</div>
				</div>
			</div>
		</div>
	</div></div>
	</body>
</html>
