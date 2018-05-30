$(document).ready(function() {
	buscar_Clientes();
	function buscar_Clientes(){
    $.ajax({
        url:"funciones.php",
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
        url:"funciones.php",
        type: "POST",
        data:({
        funcion: "InsertarUsuario",
        user: user,
        pass: $("#pass").val(),
        tipo: tipo,
        nombretipo: $("#tipo option:selected").text(),
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
        categoria: $("#categorias option:selected").val()
        }),
    })
    .done(function(msg){
        window.location.reload(false);
        alert(msg);
    })
    .fail(function(){
        alert(msg);
    });
});
    $(document).on('change', '#tipo', function() {
        if ($(this).val() == "admin") {
            $("#formUsuarios").slideDown();
            $(".categoriaProveedor").slideDown();
        }else if ($(this).val() == "normal"){
            $(".categoriaProveedor").slideUp();
            $("#formUsuarios").slideDown();
        }
    });

});


