<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Users</title>
</head>
<body>
<?php include "../modules/menu/index.php";?>
<?php include "../../model/conexion/index.php";?>	
<script src="../src/js/jquerydata.js"></script>
<link rel="stylesheet" type="text/css" href="../src/css/backgrounds.css">
<link rel="stylesheet" type="text/css" href="../src/css/general.css">

<div class="container">
<div class="well">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalitems">Registrar</button>
<div class="lista_items"></div>
</div>
</div>
<!-- USUARIOS INSERT -->
<div class="modal fade" id="modalitems" data-backdrop="static" data-keyboard="false" data-keyboard=”false” tabindex=”-1″  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" role=”dialog”>
<div class="modal-dialog ">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h6 class="modal-title">Registrar Items</h6>
</div>
<div class="modal-body">
<form id="formularioitems" method="POST" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<label for="nombre">Nombre</label>
<input type="text" class="form-control" id="nombre" name="nombre" >
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<label for="usr">Descripcion</label>
<input type="text" class="form-control" id="descripcion" name="descripcion" >
</div>	
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<label for="precio">Precio</label>
<input type="text" class="form-control" id="precio" name="precio" >
</div>	
</div>
</div>
<br>
<select class="selectpicker form-control" name="categoria" id="categoria" data-show-subtext="true" 
data-live-search="true">
<label for="sel1">Nivel</label>
<?php $sel =$con->prepare("SELECT id,nombre_c FROM categories");
$sel->execute();
$res = $sel->get_result();
while ($fila =$res->fetch_assoc()){?>
<option value="<?php echo $fila ["id"]?>">
<?php  echo $fila ["nombre_c"]?>
</option>
<?php } 
$sel->close();
$con->close(); ?>
</select><br><br>

<div class="row">
<div class="col-lg-12">
<div class="form-group">
<label for="sel1">Imagen</label>
<span class="btn btn-primary btn-lg  btn-file glyphicon glyphicon-camera">
 <input type="file" id="foto" name="foto">
</span>
</div>
</div>
</div>

</div>
<div class="modal-footer">
<button type="submit" class="btn btn-sm btn-success" >
<span class="glyphicon glyphicon-ok"></span>
</button>
</form>
<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span>
</button>
</div>
</div>
</div>
</div>
<!-- END MODAL INSERT -->
</div>
<script src="../../controller/itemscontroller/index.js"></script>
</body>
</html>