<?php
include'../conexion/index.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$nombre=$con->real_escape_string(htmlentities($_POST['nombre']));
$descripcion=$con->real_escape_string(htmlentities($_POST['descripcion']));
$precio=$con->real_escape_string(htmlentities($_POST['precio']));
$categoria=$con->real_escape_string(htmlentities($_POST['categoria']));
//foto
$extension='';
$ruta='../../view/assets/images/';
$archivo=$_FILES['foto']['tmp_name'];
$nombrearchivo=$_FILES['foto']['name'];
$info=pathinfo($nombrearchivo); 
if($archivo !=''){
$extension =$info['extension'];
if($extension =="png"||$extension=="PNG"||$extension=="jpg"||$extension=="JPG"){
move_uploaded_file($archivo,'../../view/assets/images/'.$nombre.'.'.$extension);
$ruta=$ruta."/".$nombre.'.'.$extension;
}else{
header('location:../../view/componentes/alert/alerta_error.php');
}
}else{
$ruta="../../view/assets/images/avataritem.png";	
}
$ins=$con->query("INSERT INTO items VALUES('','$nombre','$descripcion','$precio','$ruta','$categoria')");
if($ins){
}else{
}
$con->close();
}else{
header('location:../../view/src/404.html');
}
?>










