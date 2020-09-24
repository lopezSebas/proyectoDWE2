<?php 
include('../soap/service.php');
//print_r ($servicio->listUsers());
    #ADD
    
    #echo $servicio->addDetalle( 2, 6, 25, 7 );
    #echo " <br/> exec @ " . date("Y-m-d H:i:s");
    

    #EDIT

    #echo $servicio->editDetalle( 3, 2, 6, 55, 10 );
    #echo " <br/> exec @ " . date("Y-m-d H:i:s");
    

    #DELETE
    
    #echo $servicio->deleteDetalle(3);
    #echo " <br/> exec @ " . date("Y-m-d H:i:s");
    


    #LIST
    
    print_r($servicio->listInventario());
    #print_r($servicio->getDetalle(1));
    #echo " <br/> exec @ " . date("Y-m-d H:i:s");


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
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == ""){

}else if(isset($_POST["parametro"]) && $_POST["parametro"] == ""){

}

?>