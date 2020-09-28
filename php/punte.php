<?php
include('../soap/service.php');
session_start();
$_SESSION["carrito"] = array();

if (is_array($_FILES) && count($_FILES) > 0) {
    if (($_FILES["imagen"]["type"] == "image/pjpeg") || ($_FILES["imagen"]["type"] == "image/jpeg") || ($_FILES["imagen"]["type"] == "image/png") || ($_FILES["imagen"]["type"] == "image/gif")) {
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], "../imagenes/".$_FILES['imagen']['name'])) {
            echo $_FILES['imagen']['name'];
        } else {
            echo 1;
        }
    } else {
        echo 2;
    }
} else if(isset($_POST["parametro"]) && $_POST["parametro"] == "cu"){
    echo $servicio->addUser($_POST["usuario"], "nuevo123", $_POST["tipo"], $_POST["telefono"], $_POST["nombre"], $_POST["apellido"] );
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "du"){
    echo $servicio->deleteUser($_POST["id"]);
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "eu"){
    echo $servicio->editUser($_POST["id"], $_POST["usuario"], $_POST["pass"], $_POST["tipo"], $_POST["telefono"], $_POST["nombre"], $_POST["apellido"] );
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "cp"){
    echo $servicio->addProduct($_POST["codigo"],$_POST["descripcion"],$_POST["marca"],$_POST["tipo"],$_POST["url"]);
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "dp"){
    echo $servicio->deleteProduct($_POST["id"]);
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "ep"){
    echo $servicio->editProduct($_POST["id"],$_POST["codigo"],$_POST["descripcion"],$_POST["marca"],$_POST["tipo"],$_POST["url"]);
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "cs"){
    echo $servicio->addWH($_POST["nombre"],$_POST["direccion"],$_POST["correo"],$_POST["telefono"]);
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "ds"){
    echo $servicio->deleteWH($_POST["id"]);
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "es"){
    echo $servicio->editWH($_POST["id"],$_POST["nombre"],$_POST["direccion"],$_POST["correo"],$_POST["telefono"]);
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "cpr"){
    echo $servicio->addSupplier($_POST["nombre"],$_POST["nit"],$_POST["correo"],$_POST["telefono"],$_POST["tipo"]);
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "dpr"){
    echo $servicio->deleteSupplier($_POST["id"]);
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "epr"){
    echo $servicio->editSupplier($_POST["id"],$_POST["nombre"],$_POST["nit"],$_POST["correo"],$_POST["telefono"],$_POST["tipo"]);
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "ci"){
    echo $servicio->addInventario($_POST["producto"],$_POST["sucursal"],$_POST["proveedor"],'Disponible','',date("Y-m-d H:i:s"));
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "di"){
    echo $servicio->deleteInventario($_POST["id"]);
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "ei"){
    echo $servicio->editInventario($_POST["id"],$_POST["producto"],$_POST["sucursal"],$_POST["proveedor"],'Disponible','',date("Y-m-d H:i:s"));
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "oc"){
    echo $servicio->changeOrderStatus($_POST["id"],'Cancelado');
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "in"){
    if($servicio->logIn(base64_decode($_POST["user"]),base64_decode($_POST["pass"]))){
        if($_SESSION["tipo"] == "Colaborador"){
            echo 2;
        }else{
            echo 3;
        }
    }else{
       echo 0;
    }
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "lo"){
    $_SESSION["id_usuario"] = "";
    $_SESSION["tipo"] = "";
    $_SESSION["nombre"] = "";
    $_SESSION["apellido"] = "";
    echo 1;
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "aca"){
    if ($_POST["carro"] != ""){
        $_SESSION["carrito"] = explode(",",$_POST["carro"]);
        array_push($_SESSION["carrito"],$_POST["idProducto"]);
    }else{
        array_push($_SESSION["carrito"],$_POST["idProducto"]);
    }
    echo 1;
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "epi"){
    $_SESSION["carrito"] = explode(",",$_POST["carro"]);
    unset($_SESSION["carrito"][$_POST["id"]]);
    echo 1;
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "ru"){
    echo $servicio->addUser($_POST["usuario"], $_POST["pass"], "Cliente", $_POST["telefono"], $_POST["nombre"], $_POST["apellido"] );
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "conf"){
    $i = 0;
    $idOrden =  $servicio->addOrden($_POST["idUsuario"],'22',date("Y-m-d H:i:s"),'Ingreso',"0001-01-01 00:00:00");
    foreach ($_POST["arrgloItem"] as $producto){
        if($servicio->addDetalle($idOrden,$producto["0"],'1','5')){
            $i++;
        }
    }
    if($i == $_POST["totalItems"]){
        echo 1;
    }else{
        echo 0;
    }
}

?>