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
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaluser">Registrar</button>
<div class="lista_user"></div>
</div>
</div>
<!-- USUARIOS INSERT -->
<div class="modal fade" id="modaluser" data-backdrop="static" data-keyboard="false" data-keyboard=”false” tabindex=”-1″  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" role=”dialog”>
<div class="modal-dialog ">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h6 class="modal-title">Registrar usuarios</h6>
</div>
<div class="modal-body">
<form id="formulariouser" method="POST" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="usr">Nick</label>
<input type="text" class="form-control" id="nick" name="nick" >
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label for="pwd">Password:</label>
<input type="password" class="form-control" id="pass" name="pass" >
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="usr">Nombre</label>
<input type="text" class="form-control" id="nombre" name="nombre" >
</div>	
</div>
<div class="col-lg-6">
<div class="form-group">
<label for="usr">Correo</label>
<input type="email" class="form-control" id="correo" name="correo">
</div>	
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="sel1">Nivel</label>
<select class="form-control" id="nivel" name="nivel">
<option value="ADMINISTRADOR">Administrador</option>
<option value="ASISTENTE">Asistente</option>
</select>
</div>	
</div>
<br>
<div class="col-lg-6">
<div class="form-group">
<label for="sel1">Fotografia</label>
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
<!-- MODAL UPDATE -->
<div class="modal fade" id="modaluserupdate" data-backdrop="static" data-keyboard="false" data-keyboard=”false” tabindex=”-1″  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" role=”dialog”>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Editar usuario</h4>
</div>
<div class="modal-body">
<form id="formulariousuariosupdate">
<div class="form-group">
<label for="text">Nick de usuario</label>
<input type="input" class="form-control" id="nick2" name="nick2" placeholder="Ej:tomas12">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input type="email" class="form-control" id="correo2" name="correo2" placeholder="Correo electronico">
</div>
<div class="form-group">
<label for="text">Nombre completo</label>
<input type="input" class="form-control" id="nombre2" name="nombre2" placeholder="Ej:raul castellano">
</div>
<div class="form-group">
<label>Nivel de usario</label>
<select class="form-control select2" id="nivel2" name="nivel2" style="width: 100%;">
<option value="ADMINISTRADOR">Administrador</option>
<option value="ASISTENTE">Asistente</option>
</select>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
<button type="button" class="btn btn-success"  onclick="ModificarU()">Modificar</button>
<input type="hidden" id="hidden_usuario_id">
</div>
</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
</div>
<!-- END MODAL UPDATE -->
</div>
<script src="../../controller/usercontroller/index.js"></script>
</body>
</html>