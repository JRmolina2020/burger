<?php
include("../../model/users/lista.php");
echo "<script language=\"JavaScript\" src=\"../src/js/table.js\"></script>"; 
$data = '<br><br>
<div class="table-responsive">
<table class="datatable table table-striped table-bordered">
<thead>
<tr>
<th>Nick</th>
<th>Nombre</th>
<th>Correo</th>
<th>Nivel</th>
<th>Bloqueo</th>
<th>Perfil</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
';
while($fila = $sel->fetch_assoc()){
$data .= '
<tr>
<td>'.$fila['nick'].'</td>
<td>'.$fila['nombre_usuario'].'</td>
<td>'.$fila['correo_usuario'].'</td>
<td>'.$fila['nivel'].'</td>
<td>';
if($fila['bloqueo'] == '1'){
$data.='<span onclick="Bloquear_user('.$fila['idusuarios'].','.$fila['bloqueo'].')" class="label label-success">Activo</span>';
}
else if ($fila['bloqueo'] == '0' ){
$data.='<span onclick="Bloquear_user('.$fila['idusuarios'].','.$fila['bloqueo'].')" class="label label-danger">Bloqueado</span>';
}
$data.='</td>
<td><img class="img-responsive img-circle" width="40" height="40" alt="Error al cargar"src="'.$fila['foto'].'"></td>
<td>
<a onclick="Mostrar('.$fila['idusuarios'].')" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
<a onclick="Delete('.$fila['idusuarios'].')" class="btn btn-xs  btn-danger"> <span class="glyphicon glyphicon-remove"></span></a>
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

