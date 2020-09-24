<?php 
include('../soap/service.php');
//print_r ($servicio->listUsers());
    #ADD
    
    #echo $servicio->addDetalle( 2, 6, 25, 7 );
    #echo " <br/> exec @ " . date("Y-m-d H:i:s");
    

    #EDIT

    #echo $servicio->editDetalle( 3, 2, 6, 55, 10 );
    echo $servicio->changeOrderStatus( 2, "Ingresada");
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