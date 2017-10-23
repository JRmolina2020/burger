
<?php
include'../conexion/index.php';
if(isset($_POST['id']) && isset($_POST['id']) != "")
if(isset($_POST['bloqueo']) && isset($_POST['bloqueo']) != "")
{
$id = $con->real_escape_string(htmlentities($_POST["id"]));
$bloqueo = $con->real_escape_string(htmlentities($_POST["bloqueo"]));
if ($bloqueo==1) {
$del =$con->query("UPDATE  usuarios SET bloqueo=0 WHERE idusuarios='$id'");
}else{
$del =$con->query("UPDATE  usuarios SET bloqueo=1 WHERE idusuarios='$id'");	
}
if (!$result = mysql_query($del)) {
exit(mysql_error());
}
}
$con->close();
?>




