<?php
mysql_connect("localhost","root","");
mysql_select_db("agencia");
if(isset($_REQUEST["nombre"]) && isset($_REQUEST["comentario"])) {

$nombre = $_REQUEST["nombre"];
$comentario = $_REQUEST["comentario"];

if($nombre != "" || $comentario != "") {
  $sql = "INSERT INTO comentarios VALUES ('','$nombre','$comentario')";
  $result=mysql_query($sql);
}

}
$sql = "SELECT * FROM comentarios";
$result=mysql_query($sql);

$rows = array();
while($r = mysql_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);

if(!$sql)
die(mysql_error());

mysql_close();

?>
