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
                    alert(" ingresado exitosamente");
                    location.href = "home.php";
                }else{
                    alert("No se pudo ingresar el pedido, favor revisar.");
                }
            }
        });
    }
}
function editar(){
    var parametro = "e";
    var  = document.getElementById("").value;
    var  = document.getElementById("").value;
    var  = document.getElementById("").value;
    var id = document.getElementById("id").value;

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
                id_pedido:id,
            },
            cache: false,
            success: function (respuesta) {
                if(respuesta.trim() == 1){
                    alert(" actualizado exitosamente");
                    location.href = "home.php";
                }else{
                    alert("No se pudo actualizar el pedido, favor revisar.");
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
            id_pedido:id,
        },
        cache: false,
        success: function (respuesta) {
            if(respuesta.trim() == 1){
                alert(" Eliminado exitosamente");
                location.href = "home.php";
            }else{
                alert("No se pudo Eliminar el pedido, favor revisar.");
            }
        }
    });
}


*/
