<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Users</title>
</head>
<body>
<?php include "../modules/menu/index.php";?>	
<script src="../src/js/jquerydata.js"></script>
<link rel="stylesheet" type="text/css" href="../src/css/backgrounds.css">
<link rel="stylesheet" type="text/css" href="../src/css/general.css">


<div class="container">
<div class="well">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalcategoria">Categoria</button>
<div class="lista_categorie"></div>
</div>
</div>
<!-- CATEGORIES INSERT -->
<div class="modal fade" id="modalcategoria" data-backdrop="static" data-keyboard="false" data-keyboard=”false” tabindex=”-1″  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" role=”dialog”>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h6 class="modal-title">Registrar categorias</h6>
</div>
<div class="modal-body">
<form id="formulariocategories" method="POST">
<div class="form-group">
<label for="usr">Nombre</label>
<input type="text" class="form-control" id="nombre" name="nombre" >
</div>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-sm btn-success" >
<span class="glyphicon glyphicon-ok"></span>
</button>
<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span>
</button>
</div>
</div>
</div>
</form>
</div>
</div>
<script src="../../controller/categoriescontroller/index.js"></script>
</body>
</html>