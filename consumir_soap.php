<?php 
include('./soap/service.php');
//print_r ($servicio->listUsers());
    #ADD
    /*
    echo $servicio->addUser("xamos", "xxxx", "tester", "11111", "xxxx", "Morales" );
    echo " <br/> exec @ " . date("Y-m-d H:i:s");
    */
/*
    #EDIT

    echo $servicio->editUser(2, "Andre8", "asdasdad", "Admin", "000000", "xxxx", "Morales" );
    echo " <br/> exec @ " . date("Y-m-d H:i:s");
    */

    #DELETE
    /*
    echo $servicio->deleteUser(1);
    echo " <br/> exec @ " . date("Y-m-d H:i:s");
    */


    #LIST
    
    print_r($servicio->listUsers());
    #print_r($servicio->getUser(1));
    echo " <br/> exec @ " . date("Y-m-d H:i:s");
    


/*if(isset($_POST["parametro"]) && $_POST["parametro"] == "cu"){
    echo $servicio->addUser($_POST["usuario"], "nuevo123", $_POST["tipo"], $_POST["telefono"], $_POST["nombre"], $_POST["apellido"] );
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "du"){
    echo $servicio->deleteUser($_POST["id"]);
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == "eu"){
    echo $servicio->editUser($_POST["id"], $_POST["usuario"], $_POST["pass"], $_POST["tipo"], $_POST["telefono"], $_POST["nombre"], $_POST["apellido"] );
}else if(isset($_POST["parametro"]) && $_POST["parametro"] == ""){

}else if(isset($_POST["parametro"]) && $_POST["parametro"] == ""){

}else if(isset($_POST["parametro"]) && $_POST["parametro"] == ""){

}else if(isset($_POST["parametro"]) && $_POST["parametro"] == ""){

}else if(isset($_POST["parametro"]) && $_POST["parametro"] == ""){

}else if(isset($_POST["parametro"]) && $_POST["parametro"] == ""){

}else if(isset($_POST["parametro"]) && $_POST["parametro"] == ""){

}else if(isset($_POST["parametro"]) && $_POST["parametro"] == ""){

}*/


?>