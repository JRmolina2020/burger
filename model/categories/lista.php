<?php 
require '../../model/conexion/index.php';
$sel =$con->query("SELECT * FROM categories  ORDER BY id DESC");
?>