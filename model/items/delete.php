
<?php
include'../conexion/index.php';
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
// get user id
$id = $con->real_escape_string(htmlentities($_POST["id"]));
// delete User
$del =$con->query("DELETE FROM items WHERE id_items ='$id'");
if (!$result = mysql_query($del)) {
exit(mysql_error());
}
}
$con->close();
?>




