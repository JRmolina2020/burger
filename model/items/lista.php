<?php 
require '../../model/conexion/index.php';
$sel =$con->query(" select * from items order by category desc");
?>