
<?php
include'../conexion/index.php'
$del =$con->query("DELETE FROM usuarios");
if (!$result = mysql_query($del)) {
exit(mysql_error());
}
$con->close();
?>




