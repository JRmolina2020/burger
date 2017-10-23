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

<style type="text/css">
	img.mediana{
  width: 330px; height: 290px;
}
p.invisible{
color:white;
}
</style>
</head>
<body>
<?php 
$view = '	
<h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> PACCO EXPRESS <span class="glyphicon glyphicon-cutlery"></span></h1>
<br><br>
<div class="container-fluid">
<div class="col-lg-4"></div>
<div class="center">
<div class="col-lg-4">
<select class="selectpicker ro form-control" name="input-search" id="input-search" data-show-subtext="true" 
data-live-search="true">
<label for="sel1">Nivel</label>
<option value="ordenar">Todos</option>
';
$sel =$con->prepare("SELECT id,nombre_c FROM categories");
$sel->execute();
$res = $sel->get_result();
while ($fila =$res->fetch_assoc()){
$view .='
<option>'.$fila["nombre_c"].'
</option>
';
 } 
 $view .='
</select>
</div>
</div>
<div class="col-lg-4"></div>
<br><br><br><br>
<div class="container-fluid">
';
 $sel2 =$con->query(" SELECT * FROM categories INNER JOIN items ON items.category = categories.id order by category asc");
while($fila = $sel2->fetch_assoc()){ 
$view .='
<div class="searchable-container">
<div class="items col-xs-12 col-sm-6 col-md-4 col-lg-4">
<div class="container site">
<div class="col-sm-1 col-md-4">
<div class="thumbnail">';
$view .= '
<img class="mediana" ondblclick="javascript:this.width=100;this.height=80"  src="'.$fila['image'].'" high="805"  alt="...">
<div class="price">'.$fila['price'].'</div>
<div class="caption">
<h4>'.$fila['name'].'</h4>
<p>'.$fila['description'].'</p>
<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Ordenar</a>
<p class="invisible">'.$fila['nombre_c'].'</p>
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
<script src="../src/js/filter.js"></script>
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>
</body>
</html>

