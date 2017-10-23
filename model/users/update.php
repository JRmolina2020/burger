<?php 
require "../conexion/index.php";
if($_SERVER['REQUEST_METHOD']=='POST'){

$nick=htmlentities($_POST["nick"]);
$nombre=htmlentities($_POST["nombre"]);
$correo=htmlentities($_POST["correo"]);
$nivel=htmlentities($_POST["nivel"]);
$id=htmlentities($_POST["id"]);

$up =$con->prepare("UPDATE usuarios SET nick=?, 
nombre_usuario=?,correo_usuario=?, nivel=? WHERE idusuarios=?");
$up->bind_param('ssssi',$nick,$nombre,$correo,$nivel,$id);
if ($up->execute()) {
}
$up->close();
$con->close();
}else{

}
?>