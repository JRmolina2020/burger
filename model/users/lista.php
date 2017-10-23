<?php 
require '../../model/conexion/index.php';
$sel =$con->query("SELECT * FROM usuarios  ORDER BY idusuarios DESC");
?>