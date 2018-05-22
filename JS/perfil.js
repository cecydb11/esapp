$(document).ready(function() {
	$(document).on('click', '#modifcarUsu', function() {
	var tipo = $("#tipo option:selected").val();
    var user = $("#user").val();
    var id = $("#idid").val();
    $.ajax({
        url:"../../Aplicacion/Empresa/funcionesEmpresa.php",
        type: "POST",
        data:({
        funcion: "ModificarUsuario",
        user: user,
        pass: $("#pass").val(),
        tipo: tipo,
        id: id
        }),
    })
    .done(function(msg){
        alert(msg);
        window.location.reload(false);
    })
    .fail(function(){
        alert(msg);
    });
	});
});