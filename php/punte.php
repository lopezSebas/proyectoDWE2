<?php
include('../soap/service.php');

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
    echo base64_decode($_POST["pass"]). " " .base64_decode($_POST["user"]);
}
?>