<?php 


    
    
    include('./php/service.php');
    print_r ($servicio->listUsers());
    
    
    #ADD
    /*
    echo $servicio->addUser("xamos", "xxxx", "tester", "11111", "xxxx", "Morales" );
    echo " <br/> exec @ " . date("Y-m-d H:i:s");
    */

    #EDIT
    /*
    echo $servicio->editUser(2, "Andre8", "asdasdad", "Admin", "000000", "xxxx", "Morales" );
    echo " <br/> exec @ " . date("Y-m-d H:i:s");
    */

    #DELETE
    /*
    echo $servicio->deleteUser(1);
    echo " <br/> exec @ " . date("Y-m-d H:i:s");
    */
    



?>