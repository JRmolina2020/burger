$(document).ready(function() {
$('#formularioitems') .bootstrapValidator({
message: 'This value is not valid',
feedbackIcons: {
valid: 'glyphicon glyphicon-ok',
invalid: 'glyphicon glyphicon-remove',
validating: 'glyphicon glyphicon-refresh'
},
excluded: [':disabled'],
fields: {
nombre: {
message: 'El nombre no es valido',
validators: {
notEmpty: {
message: 'El nombre es obligatorio y no puede estar vacio.'
},
stringLength: {
min: 3,
max: 50,
message: 'Minimo 3 caracteres y Maximo 15 '
}
}
},
descripcion: {
message: 'La descripcion no es valida',
validators: {
notEmpty: {
message: 'La descripcion del producto es obligatoria.'
},
stringLength: {
min: 10,
max: 100,
message: 'Minimo 10 caracteres y Maximo 70 '
}
}
},
precio: {
message: 'El preico no es valido',
validators: {
notEmpty: {
message: 'El precio del producto es obligatorio.'
},
regexp: {

regexp: /^[0-9]+$/,

message: 'El precio solo puede contener números'

},
stringLength: {
min: 3,
max: 7,
message: 'Minimo 3 caracteres y Maximo 7 '
}
}
},
}
})
.on('success.form.bv', function(e) {
e.preventDefault();
var f = $(this);
var formData = new FormData(document.getElementById("formularioitems"));
formData.append("dato", "valor");
$.ajax({
url: "../../model/items/index.php",
type: "post",
dataType: "html",
data: formData,
cache: false,
contentType: false,
processData: false
})
.done(function(res){
swal(
'Item Registrado!',
'correctamente!',
'success'
)
$('#modalitems').modal('hide')
readRecordsI();
$('#formularioitems')[0].reset();
$('#formularioitems').bootstrapValidator("resetForm",true); 
});
});

$('#modalitems')
.on('shown.bs.modal', function () {
$('#formularioitems').find('[name="nombre"]').focus();
})
});

function readRecordsI() {
$.get("view.php", {}, function (data, status) {
$(".lista_items").html(data);
});
}
// end delete
// delete from individual
function DeleteI(id) {
swal({
title: 'Deseas Eliminar el Registro?',
text: "Recueda,Una vez eliminado no se puede Recuperar",
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Si,Eliminarlo!'
}).then(function () {
$.post("../../model/items/delete.php", {
id: id
},
function (data, status) {
readRecordsI();
}
);
})
}
// end delete
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
readRecordsI(); 
});
