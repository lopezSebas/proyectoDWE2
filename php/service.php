<?php 

class SistemaVentas {

    private $client;

    public function __construct($cliente) {
        $client = $cliente;
    }


    public function agregar_cliente($nombre, $apellido, $correo, $telefono) {
        $params = array(
            "nombre" => $nombre, 
            "apellido" => $apellido, 
            "correo" => $correo, 
            "telefono" => $telefono
        );

        return $this->client->addCustomer($params);
    }

    public function deleteCustomer($id_cliente) {
        $params = array ( "id" => $id_cliente );
        return $this->client->deleteCustomer($params)[0];
    }

}

include('./client.php');

$ventas = new SistemaVentas($client);

/*$nombre = "Guicho";
$apellido = "Lyanno";
$correo = "cazzu@gmail.com";
$telefono = "111222333";
echo $ventas->agregar_cliente($nombre, $apellido, $correo, $telefono);


$id = "55";
$ventas->deleteCustomer($id);

$params = array(
    "nombre" => $nombre, 
    "apellido" => $apellido, 
    "correo" => $correo, 
    "telefono" => $telefono
);
echo "ends at: " . date("Y-m-d H:i:s"); 
$client->addCustomer();*/

echo "ends at: " . date("Y-m-d H:i:s");

?>