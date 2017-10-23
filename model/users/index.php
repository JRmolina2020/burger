<?php
include'../conexion/index.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$nick=$con->real_escape_string(htmlentities($_POST['nick']));
$pass=$con->real_escape_string(htmlentities($_POST['pass']));
$pass= md5($pass);
$nombre=$con->real_escape_string(htmlentities($_POST['nombre']));
$correo=$con->real_escape_string(htmlentities($_POST['correo']));
$nivel=$con->real_escape_string(htmlentities($_POST['nivel']));
//foto
$extension='';
$ruta='../../view/assets/images/';
$archivo=$_FILES['foto']['tmp_name'];
$nombrearchivo=$_FILES['foto']['name'];
$info=pathinfo($nombrearchivo); 
if($archivo !=''){
$extension =$info['extension'];
if($extension =="png"||$extension=="PNG"||$extension=="jpg"||$extension=="JPG"){
move_uploaded_file($archivo,'../../view/assets/images/'.$nick.'.'.$extension);
$ruta=$ruta."/".$nick.'.'.$extension;
}else{
header('location:../../view/componentes/alert/alerta_error.php');
}
}else{
$ruta="../../view/assets/images/avatar.png";	
}
$ins=$con->query("INSERT INTO usuarios VALUES('','$nick','$pass','$nombre','$correo','$nivel',1,'$ruta')");
if($ins){
}else{

}
$con->close();
}else{
header('location:../../view/src/404.html');
}
?>










