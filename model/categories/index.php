<?php
include'../conexion/index.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$nombre=$con->real_escape_string(htmlentities($_POST['nombre']));
$ins=$con->query("INSERT INTO categories VALUES('','$nombre')");
if($ins){
}else{
}
$con->close();
}else{
header('location:../../view/src/404.html');
}
?>










