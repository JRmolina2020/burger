<!DOCTYPE html>
<html>
<head>
<title>Burger king</title>
<link rel="stylesheet" type="text/css" href="../src/css/backgrounds.css">
<link rel="stylesheet" type="text/css" href="../src/css/general.css">
<link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../src/css/principal.css">
<?php include"../src/index.php";?>
<?php include"../../model/conexion/index.php";?>

</head>
<body>
<?php 
$view = '	
<div class="container">
<h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> PACCO EXPRESS <span class="glyphicon glyphicon-cutlery"></span></h1>
<nav>
<br>
<ul class="nav nav-pills">';
$sel1 =$con->query(" SELECT * FROM categories");
while($fila = $sel1->fetch_assoc()){ 
if($fila['id'] == '22')	
$view .='
<li role="presentation" class="active">
<a  href="#'. $fila['id'] . '" data-toggle="tab">'.$fila['nombre_c'].'</a></li>
';
else
$view .='
<li role="presentation">
<a  href="#'. $fila['id'] . '" data-toggle="tab">'.$fila['nombre_c'].'</a></li>
';	
}
$view .='
</ul>
 </nav>
<br><br><br>

<div class="tab-content">
';
 $sel2 =$con->query(" SELECT * FROM  items ");



while($fila = $sel2->fetch_assoc()){ 

if($fila['category'] == '16')
$view .='
<div class="tab-pane active " id="'.$fila['category'] .'">
';
else
$view .='
<div class="tab-pane active " id="'.$fila['category'] .'">
';


$view .='
<div class="col-lg-4">
<div class="container site">
<div class="col-sm-6 col-md-4">
<div class="thumbnail">';
$view .= '
<img  src="'.$fila['image'].'" high="805"  alt="...">
<div class="price">'.$fila['price'].'</div>
<div class="caption">
<h4>'.$fila['name'].'</h4>
<p>'.$fila['description'].'</p>
<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Ordenar</a>
</div>
</div>
</div>
</div>
</div>
</div>';
}

$view .='</div></div>';

echo $view;
?>
<script src="../../controller/appcontroller/index.js"></script>
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>
</body>
</html>

