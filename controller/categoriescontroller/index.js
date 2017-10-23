$(document).ready(function() {
$('#formulariocategories') .bootstrapValidator({
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
var formData = new FormData(document.getElementById("formulariocategories"));
formData.append("dato", "valor");
$.ajax({
url: "../../model/categories/index.php",
type: "post",
dataType: "html",
data: formData,
cache: false,
contentType: false,  
processData: false
})
.done(function(res){
swal(
'Categoria registrada!',
'correctamente!',
'success'
)
$('#modalcategoria').modal('hide')
readRecordsCategorie();
$('#formulariocategories')[0].reset();
$('#formulariocategories').bootstrapValidator("resetForm",true); 
});
});

$('#modalcategoria')
.on('shown.bs.modal', function () {
$('#formulariocategories').find('[name="nombre"]').focus();
})
});

function readRecordsCategorie() {
$.get("view.php", {}, function (data, status) {
$(".lista_categorie").html(data);
});
}
// delete from individual
function DeleteC(id) {
swal({
title: 'Deseas Eliminar el Registro?',
text: "Recueda,Una vez eliminado no se puede Recuperar",
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Si,Eliminarlo!'
}).then(function () {
$.post("../../model/categories/delete.php", {
id: id
},
function (data, status) {
readRecordsCategorie();
}
);
})
}
// end delete



$(document).ready(function () {
readRecordsCategorie();
});
