$(document).ready(function() {
$('#formulariouser') .bootstrapValidator({
message: 'This value is not valid',
feedbackIcons: {
valid: 'glyphicon glyphicon-ok',
invalid: 'glyphicon glyphicon-remove',
validating: 'glyphicon glyphicon-refresh'
},
excluded: [':disabled'],
fields: {
nick: {
message: 'El nick no es valido por favor rectifique',
validators: {
notEmpty: {
message: 'El nick es obligatorio y no puede estar vacio.'
},
stringLength: {
min: 4,
max: 12,
message: 'Minimo 4 caracteres y Maximo 12 '
},
regexp: {
regexp: /^[a-zA-Z0-9_\.]+$/,
message: 'No se permiten espacios'
}
}
},
correo: {
validators: {
notEmpty: {
message: 'El correo es obligatorio y no puede estar vacio'
},
emailAddress: {
message: 'Verifique !!No es una dirección de correo electrónico válida'
}
}
},
pass: {
message: 'La contraseña no es valida',
validators: {
notEmpty: {
message: 'La contraseña es obligatoria y no puede estar vacia.'
},
stringLength: {
min: 4,
max: 12,
message: 'Minimo 4 caracteres y Maximo 12 '
},
regexp: {
regexp: /^[a-zA-Z0-9_\.]+$/,
message: 'No se permiten espacios'
}
}
},
nombre: {
message: 'El nombre no es valido',
validators: {
notEmpty: {
message: 'El nombre es obligatorio y no puede estar vacio.'
},
stringLength: {
min: 3,
max: 15,
message: 'Minimo 3 caracteres y Maximo 15 '
}
}
},

}
})
.on('success.form.bv', function(e) {
e.preventDefault();
var f = $(this);
var formData = new FormData(document.getElementById("formulariouser"));
formData.append("dato", "valor");
$.ajax({
url: "../../model/users/index.php",
type: "post",
dataType: "html",
data: formData,
cache: false,
contentType: false,
processData: false
})
.done(function(res){
swal(
'Usuario Registrado!',
'correctamente!',
'success'
)
$('#modaluser').modal('hide')
readRecords();
$('#formulariouser')[0].reset();
$('#formulariouser').bootstrapValidator("resetForm",true); 
});
});

$('#modaluser')
.on('shown.bs.modal', function () {
$('#formulariouser').find('[name="nick"]').focus();
})
});

function readRecords() {
$.get("view.php", {}, function (data, status) {
$(".lista_user").html(data);
});
}
// end delete
// delete from individual
function Delete(id) {
swal({
title: 'Deseas Eliminar el Registro?',
text: "Recueda,Una vez eliminado no se puede Recuperar",
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Si,Eliminarlo!'
}).then(function () {
$.post("../../model/users/delete.php", {
id: id
},
function (data, status) {
readRecords();
}
);
})
}
// end delete
// bloqueo usuarios
function Bloquear_user(id,bloqueo){
swal({
title: 'Desea Actualizar el acceso?',
text: "Recueda,Una vez actualizado el usuario sera activo o inactivo en la aplicacion",
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Si,seguro!'
}).then(function () {
$.post("../../model/users/bloquear.php", {
id: id,
bloqueo:bloqueo
},
function (data, status) {
readRecords();
}
);
})
}
// end bloqueo
// mostrar datos individual
function Mostrar(id) {
$("#hidden_usuario_id").val(id);
$.post("../../model/users/unique_info.php", {
id: id
},
function (data, status) {
var dato = JSON.parse(data);
$("#nick2").val(dato.nick);
$("#nombre2").val(dato.nombre_usuario);
$("#correo2").val(dato.correo_usuario);
$("#nivel2").val(dato.nivel);
}
);
$("#modaluserupdate").modal("show");
}
// end mostrar datos individual
// function modificar usuario
function ModificarU() {
var nick = $("#nick2").val();
var nombre= $("#nombre2").val();
var correo = $("#correo2").val();
var nivel = $("#nivel2").val();
var id = $("#hidden_usuario_id").val();
$.post("../../model/users/update.php", {
id:id,
nick: nick,
nombre:nombre,
correo:correo,
nivel:nivel
}, 
function (data, status) {
swal(
'Usuario Modificado!',
'correctamente!',
'success'
)	
readRecords();
}
);
$("#modaluserupdate .close").click()
}
// end modificar usuario
$(document).ready(function () {
readRecords(); 
});
