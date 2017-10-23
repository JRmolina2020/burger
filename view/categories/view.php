<?php
include("../../model/categories/lista.php");
echo "<script language=\"JavaScript\" src=\"../src/js/table.js\"></script>"; 
$data = '<br><br>
<div class="table-responsive">
<table class="datatable table table-striped table-bordered">
<thead>
<tr>
<th>Nombre categoria</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
';
while($fila = $sel->fetch_assoc()){
$data .= '
<tr>
<td>'.$fila['nombre_c'].'</td>
<td>
<a onclick="MostrarC('.$fila['id'].')" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
<a onclick="leadC('.$fila['id'].')" class="btn btn-xs  btn-danger"> <span class="glyphicon glyphicon-remove"></span></a>
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

