$(document).ready(function() {
	buscar_Clientes();
	function buscar_Clientes(){
    $.ajax({
        url:"../../Aplicacion/Empresa/funcionesEmpresa.php",
        type: "POST",
        data:({
            funcion: "SelectCategorias",
        }),
    })
    .done(function(msg){
	$("#categorias").html(msg);
    })
    .fail(function(){
        alert(msg);
    });
}
$("#formProveedor").submit(function(e) {
	e.preventDefault();
	$.ajax({
        url:"../../Aplicacion/Empresa/funcionesEmpresa.php",
        type: "POST",
        data:({
        funcion: "Insertar",
		nombre: $("#nombreEmpresa").val(),
		RazonSocial: $("#razon").val(),
		rfc: $("#rfc").val(),
		telefono: $("#telefono").val(),
		ciudad: $("#ciudad").val(),
		estado: $("#estado").val(),
		pais: $("#pais").val(),
		cp: $("#cp").val(),
		domicilio: $("#domicilio").val(),
		contacto: $("#contacto").val(),
		correo: $("#email").val(),
		categoria: $("#categorias option:selected").val(),
        tipo : $("#tipodeuser").val(),
        user: $("#nombreuser").val()
        }),
    })
    .done(function(msg){
	alert(msg);
    window.location.reload(false);
    })
    .fail(function(){
        alert(msg);
        window.location.reload(false);
    });
});

    $("#formUsuarios").submit(function(e) {
    e.preventDefault();
    var tipo = $("#tipo option:selected").val();
    var user = $("#user").val();
    if (tipo == "admin") {
        $("#formProveedor").slideDown();
        $(".categoriaProveedor").slideDown();
    }else if (tipo == "normal"){
        $("#formProveedor").slideDown();
    }
    $.ajax({
        url:"../../Aplicacion/Empresa/funcionesEmpresa.php",
        type: "POST",
        data:({
        funcion: "InsertarUsuario",
        user: user,
        pass: $("#pass").val(),
        tipo: tipo
        }),
    })
    .done(function(msg){
        $("#formUsuarios").slideUp();
        $("#tipodeuser").val(tipo);
        $("#nombreuser").val(user);
        alert(msg);
    })
    .fail(function(){
        alert(msg);
    });
});

});


