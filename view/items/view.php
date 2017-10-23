<?php
include("../../model/items/lista.php");
echo "<script language=\"JavaScript\" src=\"../src/js/table.js\"></script>"; 
$data = '<br><br>
<div class="table-responsive">
<table class="datatable table table-striped table-bordered">
<thead>
<tr>
<th>Nombre</th>
<th>Descripcion</th>
<th>Precio</th>
<th>Imagen</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
';
while($fila = $sel->fetch_assoc()){
$data .= '
<tr>
<td>'.$fila['name'].'</td>
<td>'.$fila['description'].'</td>
<td>'.$fila['price'].'</td>
<td><img class="img-responsive img-circle" width="40" height="40" alt="Error al cargar"src="'.$fila['image'].'"></td>
<td>
<a onclick="Mostrar('.$fila['id_items'].')" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
<a onclick="DeleteI('.$fila['id_items'].')" class="btn btn-xs  btn-danger"> <span class="glyphicon glyphicon-remove"></span></a>
</td>
</tr>';
}
$data .= '
</tbody>
</table>
</div>
';
echo $data;
?>

