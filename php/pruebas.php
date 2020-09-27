<?php 
    session_start();    
    session_unset();
    include('../soap/service.php');
//print_r ($servicio->listUsers());

    /*

        NO BORRAR !!!!!

    */

    echo $servicio->logIn( "slopez", "nuevo123" );
    ##echo $servicio->getUserId( "slopez");
    echo "<br/><br/>$ _ S E S S I O N<br/><br/>";
    print_r($_SESSION);
    #LOG IN
    
    #echo "-------<br/>";
    #echo "aaa" == "a";

    #ADD
    
    #echo $servicio->addDetalle( 2, 6, 25, 7 );
    #echo " <br/> exec @ " . date("Y-m-d H:i:s");
    

    #EDIT

    #echo $servicio->editDetalle( 3, 2, 6, 55, 10 );
    #echo $servicio->changeOrderStatus( 2, "Ingresada");
    #echo " <br/> exec @ " . date("Y-m-d H:i:s");
    

    #DELETE
    
    #echo $servicio->deleteDetalle(3);
    #echo " <br/> exec @ " . date("Y-m-d H:i:s");
    


    #LIST
    
    #print_r($servicio->listOrders());
    #print_r($servicio->listInventarioDisponible());
    #print_r($servicio->getDetalle(1));
    #echo " <br/> exec @ " . date("Y-m-d H:i:s");

?>