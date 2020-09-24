
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
            url: "consumir_soap.php",
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
        url: "consumir_soap.php",
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
            url: "consumir_soap.php",
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
                url: 'consumir_soap.php',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response != 1 &&  response != 2) {
                        if(urlOld == 0){
                            crearProducto(response);
                        }else{
                            if(response == "|" || response == ""){
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
            url: "consumir_soap.php",
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
                    location.href = "home.php";
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
        url: "consumir_soap.php",
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
            url: "consumir_soap.php",
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
                    location.href = "home.php";
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
            url: "consumir_soap.php",
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
                location.href = "home.php";
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
        url: "consumir_soap.php",
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
            url: "consumir_soap.php",
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
                location.href = "home.php";
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
            url: "consumir_soap.php",
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
                    location.href = "home.php";
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
        url: "consumir_soap.php",
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
function editarSucursal(){
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
            url: "consumir_soap.php",
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
                location.href = "home.php";
            }else{
                alert("No se pudo actualizar, favor revisar.");
            }
        }
    });
    }
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
            url: "consumir_soap.php",
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
            url: "consumir_soap.php",
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
        url: "consumir_soap.php",
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
