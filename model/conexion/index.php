<?php @session_start();
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = ""; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "burger"; // MySQL Database name
$con = new mysqli($host, $user, $password, $database);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
?>

