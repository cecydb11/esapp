$(document).ready(function() {
buscar_cate();
    function buscar_cate(){
    $.ajax({
        url:"../funciones.php",
        type: "POST",
        data:({
            funcion: "SelectCategorias1",
            idcate: $("#idcategoria").val()
        }),
    })
    .done(function(msg){
    $("#categorias").html(msg);
    })
    .fail(function(){
        alert(msg);
    });
}
	$(document).on('click', '#modifcarUsu', function() {
	var tipo = $("#tipo option:selected").val();
    var user = $("#user").val();
    var id = $("#idid").val();
    $.ajax({
        url:"../Empresa/funcionesEmpresa.php",
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

$(document).on('click', '#modificarPerfil', function() {
    var user = $("#usu").val();
    var tipo = $("#tipo").val();
    $.ajax({
        url:"../funciones.php",
        type: "POST",
        data:({
        funcion: "ModificarPerfil",
        user: user,
        tipo: tipo,
        nombre: $("#nombreEmpresaE").val(),
        RazonSocial: $("#razonE").val(),
        rfc: $("#rfcE").val(),
        telefono: $("#telefonoE").val(),
        ciudad: $("#ciudadE").val(),
        estado: $("#estadoE").val(),
        pais: $("#paisE").val(),
        cp: $("#cpE").val(),
        domicilio: $("#domicilioE").val(),
        contacto: $("#contactoE").val(),
        correo: $("#emailE").val(),
        categoria: $("#categorias option:selected").val()
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