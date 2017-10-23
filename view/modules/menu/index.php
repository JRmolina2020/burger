<?php  include"../src/index.php";?>
<?php include'../../model/conexion/index.php'; 
if (!isset($_SESSION['nick'])) {
header('location:../../');
}
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../src/css/menu.css">
 <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" type="text/css" href="../../src/css/general.css">
<script src="../src/js/menu.js"></script>
<head>
<meta charset="UTF-8">
<title>MENU</title>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top marginBottom-0" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#" target="_blank">Burger</a>
</div>
<div class="collapse navbar-collapse" id="navbar-collapse-1">
<ul class="nav navbar-nav">
<li><a href="../home/">Inicio</a></li>
<li><a href="../users/">Usuarios</a></li>
<li><a href="../categories/">Categoria</a></li>
<li><a href="../items/">Items</a></li>
<li><a href="../../model/login/exit.php">Salir</a></li>
</ul>
</div><!-- /.navbar-collapse -->
</nav>
<div class="container">
 <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> PACCO EXPRESS <span class="glyphicon glyphicon-cutlery"></span></h1>
</div>
<br><br>
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>
</body>
</html>



