
function crearUsuario(){
    var parametro = "cu";
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var tipo = document.getElementById("tipo").value;
    var telefono = document.getElementById("telefono").value;
    var usuario = document.getElementById("usuario").value;

    document.getElementById("nombre").style.borderColor = "inherit";
    document.getElementById("apellido").style.borderColor = "inherit";
    document.getElementById("tipo").style.borderColor = "inherit";
    document.getElementById("telefono").style.borderColor = "inherit";
    document.getElementById("usuario").style.borderColor = "inherit";

    if(nombre == ""){
        document.getElementById("nombre").style.borderColor  = "red";
        document.getElementById("nombre").focus();
        alert("Debe ingresar un nombre");
    }else if(apellido == ""){
        document.getElementById("apellido").style.borderColor  = "red";
        document.getElementById("apellido").focus();
        alert("Debe ingresar un apellido");
    }else if(tipo == "null"){
        document.getElementById("tipo").style.borderColor  = "red";
        document.getElementById("tipo").focus();
        alert("Debe seleccionar un tipo");
    }else if(telefono == ""){
        document.getElementById("telefono").style.borderColor  = "red";
        document.getElementById("telefono").focus();
        alert("Debe ingresar un telefono");
    }else if(usuario == ""){
        document.getElementById("usuario").style.borderColor  = "red";
        document.getElementById("usuario").focus();
        alert("Debe ingresar un usuario");
    }else{
        $.ajax({
            url: "punte.php",
            type: 'POST',
            data: {
                parametro:parametro,
                nombre:nombre,
                apellido:apellido,
                tipo:tipo,
                telefono:telefono,
                usuario:usuario,
            },
            cache: false,
            success: function (respuesta) {
                if(respuesta.trim() == 1){
                    alert("Usuario ingresado exitosamente");
                    location.href = "listadoUsuarios.php";
                }else{
                    alert("No se pudo ingresar el usuario, favor revisar.");
                }
            }
        });
    }
}
function eliminarUsuario(id){
    var parametro = "du";

    $.ajax({
        url: "punte.php",
        type: 'POST',
        data: {
            parametro:parametro,
            id:id,
        },
        cache: false,
        success: function (respuesta) {
            if(respuesta.trim() == 1){
                alert("Usuario Eliminado exitosamente");
                location.href = "listadoUsuarios.php";
            }else{
                alert("No se pudo Eliminar el usuario, favor revisar.");
            }
        }
    });
}
function editarUsuario(){
    var parametro = "eu";
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var tipo = document.getElementById("tipo").value;
    var telefono = document.getElementById("telefono").value;
    var usuario = document.getElementById("usuario").value;
    var pass = document.getElementById("pass").value;
    var id = document.getElementById("id").value;

    document.getElementById("nombre").style.borderColor = "inherit";
    document.getElementById("apellido").style.borderColor = "inherit";
    document.getElementById("tipo").style.borderColor = "inherit";
    document.getElementById("telefono").style.borderColor = "inherit";
    document.getElementById("usuario").style.borderColor = "inherit";
    document.getElementById("pass").style.borderColor = "inherit";

    if(nombre == ""){
        document.getElementById("nombre").style.borderColor  = "red";
        document.getElementById("nombre").focus();
        alert("Debe ingresar un nombre");
    }else if(apellido == ""){
        document.getElementById("apellido").style.borderColor  = "red";
        document.getElementById("apellido").focus();
        alert("Debe ingresar un apellido");
    }else if(tipo == "null"){
        document.getElementById("tipo").style.borderColor  = "red";
        document.getElementById("tipo").focus();
        alert("Debe seleccionar un tipo");
    }else if(telefono == ""){
        document.getElementById("telefono").style.borderColor  = "red";
        document.getElementById("telefono").focus();
        alert("Debe ingresar un telefono");
    }else if(usuario == ""){
        document.getElementById("usuario").style.borderColor  = "red";
        document.getElementById("usuario").focus();
        alert("Debe ingresar un usuario");
    }else if(pass == ""){
        document.getElementById("pass").style.borderColor  = "red";
        document.getElementById("pass").focus();
        alert("Debe ingresar una contraseña");
    }else{
        $.ajax({
            url: "punte.php",
            type: 'POST',
            data: {
                parametro:parametro,
                nombre:nombre,
                apellido:apellido,
                tipo:tipo,
                telefono:telefono,
                usuario:usuario,
                pass:pass,
                id:id,
            },
            cache: false,
            success: function (respuesta) {
                if(respuesta.trim() == 1){
                    alert("Usuario actualizado exitosamente");
                    location.href = "listadoUsuarios.php";
                }else{
                    alert("No se pudo actualizar el usuario, favor revisar.");
                }
            }
        });
    }
}

(function ($) {
    "use strict";
    $(document).ready(function() {
        $(".upload").on('click', function() {
            var formData = new FormData();
            var imagen = $('#image')[0].files[0];
            var urlOld = document.getElementById("urlOld").value;
            formData.append('imagen',imagen);
            $.ajax({
                url: 'punte.php',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response != 1 &&  response != 2) {
                        if(urlOld == 0){
                            crearProducto(response);
                        }else{
                            if(response == ""){
                                editarProducto(urlOld);
                            }else{
                                editarProducto(response);
                            }
                        }
                    } else {
                        alert('Formato de imagen incorrecto.');
                    }
                }
            });
            return false;
        });
    });
})(jQuery);
function crearProducto(url){

    var parametro = "cp";
    var codigo = document.getElementById("codigo").value;
    var descripcion = document.getElementById("descripcion").value;
    var marca = document.getElementById("marca").value;
    var tipo = document.getElementById("tipo").value;

    document.getElementById("codigo").style.borderColor = "inherit";
    document.getElementById("descripcion").style.borderColor = "inherit";
    document.getElementById("marca").style.borderColor = "inherit";
    document.getElementById("tipo").style.borderColor = "inherit";
    document.getElementById("image").style.borderColor = "inherit";

    if(codigo == ""){
        document.getElementById("codigo").style.borderColor  = "red";
        document.getElementById("codigo").focus();
        alert("Debe ingresar un  codigo");
    }else if(descripcion == ""){
        document.getElementById("descripcion").style.borderColor  = "red";
        document.getElementById("descripcion").focus();
        alert("Debe ingresar una descripcion");
    }else if(marca == ""){
        document.getElementById("marca").style.borderColor  = "red";
        document.getElementById("marca").focus();
        alert("Debe ingresar un marca");
    }else if(tipo == ""){
        document.getElementById("tipo").style.borderColor  = "red";
        document.getElementById("tipo").focus();
        alert("Debe ingresar un tipo");
    }else{
        $.ajax({
            url: "punte.php",
            type: 'POST',
            data: {
                parametro:parametro,
                codigo:codigo,
                descripcion:descripcion,
                marca:marca,
                tipo:tipo,
                url:url,
            },
            cache: false,
            success: function (respuesta) {
                if(respuesta.trim() == 1){
                    alert("Producto ingresado exitosamente");
                    location.href = "listadoProductos.php";
                }else{
                    alert("No se pudo ingresar, favor revisar.");
                }
            }
        });
    }
}
function eliminarProducto(id){
    var parametro = "dp";

    $.ajax({
        url: "punte.php",
        type: 'POST',
        data: {
            parametro:parametro,
            id:id,
        },
        cache: false,
        success: function (respuesta) {
            if(respuesta.trim() == 1){
                alert("Eliminado exitosamente");
                location.href = "listadoProductos.php";
            }else{
                alert("No se pudo Eliminar, favor revisar.");
            }
        }
    });
}
function editarProducto(url){
    var parametro = "ep";
    var codigo = document.getElementById("codigo").value;
    var descripcion = document.getElementById("descripcion").value;
    var marca = document.getElementById("marca").value;
    var tipo = document.getElementById("tipo").value;
    var id = document.getElementById("id").value;

    document.getElementById("codigo").style.borderColor = "inherit";
    document.getElementById("descripcion").style.borderColor = "inherit";
    document.getElementById("marca").style.borderColor = "inherit";
    document.getElementById("tipo").style.borderColor = "inherit";
    document.getElementById("image").style.borderColor = "inherit";

    if(codigo == ""){
        document.getElementById("codigo").style.borderColor  = "red";
        document.getElementById("codigo").focus();
        alert("Debe ingresar un  codigo");
    }else if(descripcion == ""){
        document.getElementById("descripcion").style.borderColor  = "red";
        document.getElementById("descripcion").focus();
        alert("Debe ingresar una descripcion");
    }else if(marca == ""){
        document.getElementById("marca").style.borderColor  = "red";
        document.getElementById("marca").focus();
        alert("Debe ingresar un marca");
    }else if(tipo == ""){
        document.getElementById("tipo").style.borderColor  = "red";
        document.getElementById("tipo").focus();
        alert("Debe ingresar un tipo");
    }else{

        $.ajax({
            url: "punte.php",
            type: 'POST',
            data: {
                parametro:parametro,
                codigo:codigo,
                descripcion:descripcion,
                marca:marca,
                tipo:tipo,
                url:url,
                id:id,
            },
            cache: false,
            success: function (respuesta) {
                if(respuesta.trim() == 1){
                    alert("Actualizado exitosamente");
                    location.href = "listadoProductos.php";
                }else{
                    alert("No se pudo actualizar, favor revisar.");
                }
            }
        });
    }
}

function crearSucursal(){
    var parametro = "cs";
    var nombre = document.getElementById("nombre").value;
    var direccion = document.getElementById("direccion").value;
    var correo = document.getElementById("correo").value;
    var telefono = document.getElementById("telefono").value;

    document.getElementById("nombre").style.borderColor = "inherit";
    document.getElementById("direccion").style.borderColor = "inherit";
    document.getElementById("correo").style.borderColor = "inherit";
    document.getElementById("telefono").style.borderColor = "inherit";

    if(nombre == ""){
        document.getElementById("nombre").style.borderColor  = "red";
        document.getElementById("nombre").focus();
        alert("Debe ingresar un nombre");
    }else if(direccion == ""){
        document.getElementById("direccion").style.borderColor  = "red";
        document.getElementById("direccion").focus();
        alert("Debe ingresar un direccion");
    }else if(correo == ""){
        document.getElementById("correo").style.borderColor  = "red";
        document.getElementById("correo").focus();
        alert("Debe ingresar un correo");
    }else if(telefono == ""){
        document.getElementById("telefono").style.borderColor  = "red";
        document.getElementById("telefono").focus();
        alert("Debe ingresar un telefono");
    }else{
        $.ajax({
            url: "punte.php",
            type: 'POST',
            data: {
                parametro:parametro,
                nombre:nombre,
                direccion:direccion,
                correo:correo,
                telefono:telefono,
        },
        cache: false,
            success: function (respuesta) {
            if(respuesta.trim() == 1){
                alert("Ingresado exitosamente");
                location.href = "listadoSucursales.php";
            }else{
                alert("No se pudo ingresar, favor revisar.");
            }
        }
    });
    }
}
function eliminarSucursal(id){
    var parametro = "ds";

    $.ajax({
        url: "punte.php",
        type: 'POST',
        data: {
            parametro:parametro,
            id:id,
        },
        cache: false,
        success: function (respuesta) {
            if(respuesta.trim() == 1){
                alert("Eliminado exitosamente");
                location.href = "listadoSucursales.php";
            }else{
                alert("No se pudo Eliminar, favor revisar.");
            }
        }
    });
}
function editarSucursal(){
    var parametro = "es";
    var nombre = document.getElementById("nombre").value;
    var direccion = document.getElementById("direccion").value;
    var correo = document.getElementById("correo").value;
    var telefono = document.getElementById("telefono").value;
    var id = document.getElementById("id").value;

    document.getElementById("nombre").style.borderColor = "inherit";
    document.getElementById("direccion").style.borderColor = "inherit";
    document.getElementById("correo").style.borderColor = "inherit";
    document.getElementById("telefono").style.borderColor = "inherit";

    if(nombre == ""){
        document.getElementById("nombre").style.borderColor  = "red";
        document.getElementById("nombre").focus();
        alert("Debe ingresar un nombre");
    }else if(direccion == ""){
        document.getElementById("direccion").style.borderColor  = "red";
        document.getElementById("direccion").focus();
        alert("Debe ingresar un direccion");
    }else if(correo == ""){
        document.getElementById("correo").style.borderColor  = "red";
        document.getElementById("correo").focus();
        alert("Debe ingresar un correo");
    }else if(telefono == ""){
        document.getElementById("telefono").style.borderColor  = "red";
        document.getElementById("telefono").focus();
        alert("Debe ingresar un telefono");
    }else{

        $.ajax({
            url: "punte.php",
            type: 'POST',
            data: {
                parametro:parametro,
                nombre:nombre,
                direccion:direccion,
                correo:correo,
                telefono:telefono,
                id:id,
            },
        cache: false,
            success: function (respuesta) {
            if(respuesta.trim() == 1){
                alert("Actualizado exitosamente");
                location.href = "listadoSucursales.php";
            }else{
                alert("No se pudo actualizar, favor revisar.");
            }
        }
    });
    }
}

function crearProveedor(){
    var parametro = "cpr";
    var nombre = document.getElementById("nombre").value;
    var nit = document.getElementById("nit").value;
    var correo = document.getElementById("correo").value;
    var telefono = document.getElementById("telefono").value;
    var tipo = document.getElementById("tipo").value;

    document.getElementById("nombre").style.borderColor = "inherit";
    document.getElementById("nit").style.borderColor = "inherit";
    document.getElementById("correo").style.borderColor = "inherit";
    document.getElementById("telefono").style.borderColor = "inherit";
    document.getElementById("tipo").style.borderColor = "inherit";

    if(nombre == ""){
        document.getElementById("nombre").style.borderColor  = "red";
        document.getElementById("nombre").focus();
        alert("Debe ingresar un nombre");
    }else if(nit == ""){
        document.getElementById("nit").style.borderColor  = "red";
        document.getElementById("nit").focus();
        alert("Debe ingresar un nit");
    }else if(correo == ""){
        document.getElementById("correo").style.borderColor  = "red";
        document.getElementById("correo").focus();
        alert("Debe ingresar un correo");
    }else if(telefono == ""){
        document.getElementById("telefono").style.borderColor  = "red";
        document.getElementById("telefono").focus();
        alert("Debe ingresar un telefono");
    }else if(tipo == "null"){
        document.getElementById("tipo").style.borderColor  = "red";
        document.getElementById("tipo").focus();
        alert("Debe seleccionar un tipo");
    }else{
        $.ajax({
            url: "punte.php",
            type: 'POST',
            data: {
                parametro:parametro,
                nombre:nombre,
                nit:nit,
                correo:correo,
                telefono:telefono,
                tipo:tipo,
            },
            cache: false,
            success: function (respuesta) {
                if(respuesta.trim() == 1){
                    alert("Ingresado exitosamente");
                    location.href = "listadoProvedores.php";
                }else{
                    alert("No se pudo ingresar, favor revisar.");
                }
            }
        });
    }
}
function eliminarProveedor(id){
    var parametro = "dpr";

    $.ajax({
        url: "punte.php",
        type: 'POST',
        data: {
            parametro:parametro,
            id:id,
        },
        cache: false,
        success: function (respuesta) {
            if(respuesta.trim() == 1){
                alert("Eliminado exitosamente");
                location.href = "listadoProvedores.php";
            }else{
                alert("No se pudo Eliminar, favor revisar.");
            }
        }
    });
}
function editarProveedor(){
    var parametro = "epr";

    var id = document.getElementById("id").value;
    var nombre = document.getElementById("nombre").value;
    var nit = document.getElementById("nit").value;
    var correo = document.getElementById("correo").value;
    var telefono = document.getElementById("telefono").value;
    var tipo = document.getElementById("tipo").value;

    document.getElementById("nombre").style.borderColor = "inherit";
    document.getElementById("nit").style.borderColor = "inherit";
    document.getElementById("correo").style.borderColor = "inherit";
    document.getElementById("telefono").style.borderColor = "inherit";
    document.getElementById("tipo").style.borderColor = "inherit";

    if(nombre == ""){
        document.getElementById("nombre").style.borderColor  = "red";
        document.getElementById("nombre").focus();
        alert("Debe ingresar un nombre");
    }else if(nit == ""){
        document.getElementById("nit").style.borderColor  = "red";
        document.getElementById("nit").focus();
        alert("Debe ingresar un nit");
    }else if(correo == ""){
        document.getElementById("correo").style.borderColor  = "red";
        document.getElementById("correo").focus();
        alert("Debe ingresar un correo");
    }else if(telefono == ""){
        document.getElementById("telefono").style.borderColor  = "red";
        document.getElementById("telefono").focus();
        alert("Debe ingresar un telefono");
    }else if(tipo == "null") {
        document.getElementById("tipo").style.borderColor = "red";
        document.getElementById("tipo").focus();
        alert("Debe seleccionar un tipo");
    }else{
        $.ajax({
            url: "punte.php",
            type: 'POST',
            data: {
                parametro:parametro,
                nombre:nombre,
                nit:nit,
                correo:correo,
                telefono:telefono,
                tipo:tipo,
                id:id,
            },
        cache: false,
            success: function (respuesta) {
            if(respuesta.trim() == 1){
                alert("Actualizado exitosamente");
                location.href = "listadoProvedores.php";
            }else{
                alert("No se pudo actualizar, favor revisar.");
            }
        }
    });
    }
}

function crearInventario(){
    var parametro = "ci";
    var producto = document.getElementById("producto").value;
    var sucursal = document.getElementById("sucursal").value;
    var proveedor = document.getElementById("proveedor").value;

    document.getElementById("producto").style.borderColor = "inherit";
    document.getElementById("sucursal").style.borderColor = "inherit";
    document.getElementById("proveedor").style.borderColor = "inherit";

    if(producto == "null"){
        document.getElementById("producto").style.borderColor  = "red";
        document.getElementById("producto").focus();
        alert("Debe seleccionar un producto ");
    }else if(sucursal == "null"){
        document.getElementById("sucursal").style.borderColor  = "red";
        document.getElementById("sucursal").focus();
        alert("Debe seleccionar un sucursal");
    }else if(proveedor == "null"){
        document.getElementById("proveedor").style.borderColor  = "red";
        document.getElementById("proveedor").focus();
        alert("Debe seleccionar un proveedor");
    }else{

        $.ajax({
            url: "punte.php",
            type: 'POST',
            data: {
                parametro:parametro,
                producto:producto,
                sucursal:sucursal,
                proveedor:proveedor,
            },
            cache: false,
            success: function (respuesta) {
                if(respuesta.trim() == 1){
                    alert("Ingresado exitosamente");
                    location.href = "listadoInventario.php";
                }else{
                    alert("No se pudo ingresar, favor revisar.");
                }
            }
        });
    }
}
function eliminarInventario(id){
    var parametro = "di";

    $.ajax({
        url: "punte.php",
        type: 'POST',
        data: {
            parametro:parametro,
            id:id,
        },
        cache: false,
        success: function (respuesta) {
            if(respuesta.trim() == 1){
                alert("Eliminado exitosamente");
                location.href = "listadoInventario.php";
            }else{
                alert("No se pudo Eliminar, favor revisar.");
            }
        }
    });
}
function editarInventario(){
    var parametro = "ei";

    var id = document.getElementById("id").value;
    var producto = document.getElementById("producto").value;
    var sucursal = document.getElementById("sucursal").value;
    var proveedor = document.getElementById("proveedor").value;

    document.getElementById("producto").style.borderColor = "inherit";
    document.getElementById("sucursal").style.borderColor = "inherit";
    document.getElementById("proveedor").style.borderColor = "inherit";

    if(producto == "null"){
        document.getElementById("producto").style.borderColor  = "red";
        document.getElementById("producto").focus();
        alert("Debe seleccionar un producto ");
    }else if(sucursal == "null"){
        document.getElementById("sucursal").style.borderColor  = "red";
        document.getElementById("sucursal").focus();
        alert("Debe seleccionar un sucursal");
    }else if(proveedor == "null"){
        document.getElementById("proveedor").style.borderColor  = "red";
        document.getElementById("proveedor").focus();
        alert("Debe seleccionar un proveedor");
    }else{

        $.ajax({
            url: "punte.php",
            type: 'POST',
            data: {
                parametro:parametro,
                producto:producto,
                sucursal:sucursal,
                proveedor:proveedor,
                id:id,
            },
            cache: false,
            success: function (respuesta) {
                if(respuesta.trim() == 1){
                    alert("Actualizado exitosamente");
                    location.href = "listadoInventario.php";
                }else{
                    alert("No se pudo actualizar, favor revisar.");
                }
            }
        });
    }
}
function cancelarOrden(id){
    var parametro = "oc";

    $.ajax({
        url: "punte.php",
        type: 'POST',
        data: {
            parametro:parametro,
            id:id,
        },
        cache: false,
        success: function (respuesta) {
            if(respuesta.trim() == 1){
                alert("Eliminado exitosamente");
                location.href = "listadoOrdenes.php";
            }else{
                alert("No se pudo Eliminar, favor revisar.");
            }
        }
    });
}

function cerrarSesion(){
    var parametro = "lo";
    $.ajax({
        url: "punte.php",
        type: 'POST',
        data: {
            parametro:parametro,
        },
        cache: false,
        success: function (respuesta) {
            if(respuesta.trim() == 1){
                location.href = "index.php";
            }else{
                alert("Favor revisar.");
            }
        }
    });
}

function agregarCarrito(idProducto, idUser, carro){
    if(idUser === undefined){
        alert("Para agregar el producto a su carrito debe iniciar sesión");
        location.href = "login.php";
    }else {
        console.log(carro);
        var parametro = "aca";
        $.ajax({
            url: "punte.php",
            type: 'POST',
            data: {
                parametro: parametro,
                idProducto: idProducto,
                idUser: idUser,
                carro:carro
            },
            cache: false,
            success: function (respuesta) {
                if (respuesta.trim() == 1) {
                    alert("Se agrego a carrito")
                    location.href = "index.php";
                } else {
                    alert("Favor revisar.");
                }
            }
        });
    }
}

function registrar(){
    var parametro = "ru";
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var telefono = document.getElementById("telefono").value;
    var usuario = document.getElementById("usuario").value;
    var pass = document.getElementById("pass").value;

    document.getElementById("nombre").style.borderColor = "inherit";
    document.getElementById("apellido").style.borderColor = "inherit";
    document.getElementById("telefono").style.borderColor = "inherit";
    document.getElementById("usuario").style.borderColor = "inherit";
    document.getElementById("pass").style.borderColor = "inherit";

    if(nombre == ""){
        document.getElementById("nombre").style.borderColor  = "red";
        document.getElementById("nombre").focus();
        alert("Debe ingresar un nombre");
    }else if(apellido == ""){
        document.getElementById("apellido").style.borderColor  = "red";
        document.getElementById("apellido").focus();
        alert("Debe ingresar un apellido");
    }else if(telefono == ""){
        document.getElementById("telefono").style.borderColor  = "red";
        document.getElementById("telefono").focus();
        alert("Debe ingresar un telefono");
    }else if(usuario == ""){
        document.getElementById("usuario").style.borderColor  = "red";
        document.getElementById("usuario").focus();
        alert("Debe ingresar un usuario");
    }else if(pass == ""){
        document.getElementById("pass").style.borderColor  = "red";
        document.getElementById("pass").focus();
        alert("Debe ingresar una contraseña");
    }else{
        $.ajax({
            url: "punte.php",
            type: 'POST',
            data: {
                parametro:parametro,
                nombre:nombre,
                apellido:apellido,
                telefono:telefono,
                usuario:usuario,
                pass:pass,
            },
            cache: false,
            success: function (respuesta) {
                if(respuesta.trim() == 1){
                    alert("Usuario ingresado exitosamente");
                    location.href = "login.php";
                }else{
                    alert("No se pudo ingresar el usuario, favor revisar.");
                }
            }
        });
    }
}
function eliminarItem(id, carro){
    var parametro = "epi";
    $.ajax({
        url: "punte.php",
        type: 'POST',
        data: {
            parametro:parametro,
            id:id,
            carro:carro
        },
        cache: false,
        success: function (respuesta) {
            if(respuesta.trim() == 1){
                alert("Producto eliminado correctamente del carrito");
                location.href = "cart.php";
            }else{
                alert("No se pudo eliminar, favor revisar.");
            }
        }
    });
}

function confirmarOrden(idUsuario){
    var totalItems = $('input#totalItems').val();

    var arrgloItem = new Array();
    for(var i = 0;i < parseInt(totalItems); i++){
        var id = $('input#id' + i).val();

        var arregloEnviar = new Array();
        arregloEnviar[0] = id;
        arrgloItem[i] = arregloEnviar;
    }
    var parametro = "conf";
    $.ajax({
        url: "punte.php",
        type: 'POST',
        data: {
            parametro:parametro,
            idUsuario:idUsuario,
            arrgloItem:arrgloItem,
            totalItems:totalItems
        },
        cache: false,
        success: function (respuesta) {
            if(respuesta.trim() == 1){
                alert("Orden Confirmada");
                location.href = "index.php";
            }else{
                alert("No se pudo confirmar, favor revisar.");
            }
        }
    });
}
/*
//formato

function crear(){
    var parametro = "c";
    var  = document.getElementById("").value;
    var  = document.getElementById("").value;
    var  = document.getElementById("").value;

    document.getElementById("").style.borderColor = "inherit";
    document.getElementById("").style.borderColor = "inherit";
    document.getElementById("").style.borderColor = "inherit";

    if( == ""){
        document.getElementById("").style.borderColor  = "red";
        document.getElementById("").focus();
        alert("Debe ingresar un  ");
    }else if( == ""){
        document.getElementById("").style.borderColor  = "red";
        document.getElementById("").focus();
        alert("Debe ingresar un ");
    }else if( == ""){
        document.getElementById("").style.borderColor  = "red";
        document.getElementById("").focus();
        alert("Debe ingresar un");
    }else{

        $.ajax({
            url: "punte.php",
            type: 'POST',
            data: {
                parametro:parametro,
                :,
                :,
                :,
            },
            cache: false,
            success: function (respuesta) {
                if(respuesta.trim() == 1){
                    alert("Ingresado exitosamente");
                    location.href = "home.php";
                }else{
                    alert("No se pudo ingresar, favor revisar.");
                }
            }
        });
    }
}
function editar(){
    var parametro = "e";

    var id = document.getElementById("id").value;
    var  = document.getElementById("").value;
    var  = document.getElementById("").value;
    var  = document.getElementById("").value;

    document.getElementById("").style.borderColor = "inherit";
    document.getElementById("").style.borderColor = "inherit";
    document.getElementById("").style.borderColor = "inherit";

    if( == ""){
        document.getElementById("").style.borderColor  = "red";
        document.getElementById("").focus();
        alert("Debe ingresar un  ");
    }else if( == ""){
        document.getElementById("").style.borderColor  = "red";
        document.getElementById("").focus();
        alert("Debe ingresar un ");
    }else if( == ""){
        document.getElementById("").style.borderColor  = "red";
        document.getElementById("").focus();
        alert("Debe ingresar un");
    }else{

        $.ajax({
            url: "punte.php",
            type: 'POST',
            data: {
                parametro:parametro,
                :,
                :,
                :,
                id:id,
            },
            cache: false,
            success: function (respuesta) {
                if(respuesta.trim() == 1){
                    alert("Actualizado exitosamente");
                    location.href = "home.php";
                }else{
                    alert("No se pudo actualizar, favor revisar.");
                }
            }
        });
    }
}
function eliminar(id){
    var parametro = "d";

    $.ajax({
        url: "punte.php",
        type: 'POST',
        data: {
            parametro:parametro,
            id:id,
        },
        cache: false,
        success: function (respuesta) {
            if(respuesta.trim() == 1){
                alert("Eliminado exitosamente");
                location.href = "home.php";
            }else{
                alert("No se pudo Eliminar, favor revisar.");
            }
        }
    });
}


*/
