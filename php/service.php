<?php 

class SistemaVentas {

    private $client;

    public function __construct($cliente) {
        $this->client = $cliente;
    }

    /*
        ------------------------------------------------
        --------------      Usuarios      --------------
        ------------------------------------------------
    */

    public function listUsers() {
        return $this->client->listUsers();
    }

    public function addUser($user, $pass, $type, $phone, $name, $lastname ) {                
        return $this->client->addUser(array(
            "usuario" => $user, 
            "password" => $pass, 
            "tipo" => $type, 
            "telefono" => $phone,
            "nombre" => $name,
            "apellido" => $lastname
        ));
    }

    public function editUser($id, $user, $pass, $type, $phone, $name, $lastname ) {                
        return $this->client->editUser(array(
            "id" => $id,
            "usuario" => $user, 
            "password" => $pass, 
            "tipo" => $type, 
            "telefono" => $phone,
            "nombre" => $name,
            "apellido" => $lastname
        ));
    }

    public function deleteUser($id) {                
        return $this->client->deleteUser(array(
            "id" => $id
        ));
    }

    /*
        ------------------------------------------------
        --------------      Proveedores   --------------
        ------------------------------------------------
    */

    public function addSupplier($name, $nit, $mail, $phone, $type) {                
        return $this->client->addSupplier(array(
            "nombre" => $name, 
            "nit" => $nit, 
            "correo" => $mail, 
            "telefono" => $phone,
            "tipo" => $type
        ));
    }

    public function editSupplier($id, $name, $nit, $mail, $phone, $type) {                
        return $this->client->editSupplier(array(
            "id" => $id,
            "nombre" => $name, 
            "nit" => $nit, 
            "correo" => $mail, 
            "telefono" => $phone,
            "tipo" => $type
        ));
    }

    public function deleteSupplier($id) {                
        return $this->client->deleteSupplier(array(
            "id" => $id
        ));
    }

    /*
        ------------------------------------------------
        --------------      Sucursales   ---------------
        ------------------------------------------------
    */

    public function addWH( $id, $name, $address, $mail, $phone ) {                
        return $this->client-> addWH(array(
            "id" => $id,
            "nombre" => $name, 
            "direccion" => $address, 
            "correo" => $mail, 
            "telefono" => $phone
        ));
    }

    public function editWH( $id, $name, $address, $mail, $phone ) {                
        return $this->client-> editWH(array(
            "id" => $id,
            "nombre" => $name, 
            "direccion" => $address, 
            "correo" => $mail, 
            "telefono" => $phone
        ));
    }

    public function deleteWH($id) {                
        return $this->client->deleteWH(array(
            "id" => $id
        ));
    }

    /*
        ------------------------------------------------
        --------------      Productos   ---------------
        ------------------------------------------------
    */

    public function addProduct( $code, $desc, $brand, $type, $url ) {                
        return $this->client-> addProduct(array(
            "codigo" => $code, 
            "descripcion" => $desc, 
            "marca" => $brand, 
            "tipo" => $type, 
            "url" => $url
        ));
    }

    public function editProduct( $id, $code, $desc, $brand, $type, $url ) {                
        return $this->client-> editProduct(array(
            "id" => $id,
            "codigo" => $code, 
            "descripcion" => $desc, 
            "marca" => $brand, 
            "tipo" => $type, 
            "url" => $url
        ));
    }

    public function deleteProduct($id) {                
        return $this->client->deleteProduct(array(
            "id" => $id
        ));
    }

    /*
        ------------------------------------------------
        --------------      Inventario   ---------------
        ------------------------------------------------
    */

    public function addInventario( $id_product, $id_wh, $id_supplier, $status, $type, $updated ) {                
        return $this->client-> addInventario(array(
            "id_producto" => $id_product, 
            "id_sucursal" => $id_wh, 
            "id_proveedor" => $id_supplier, 
            "estado" => $status, 
            "tipo" => $type,
            "fecha_modificacion" => $updated
        ));
    }

    public function editInventario( $id, $id_product, $id_wh, $id_supplier, $status, $type, $updated ) {                
        return $this->client-> editInventario(array(
            "id" => $id,
            "id_producto" => $id_product, 
            "id_sucursal" => $id_wh, 
            "id_proveedor" => $id_supplier, 
            "estado" => $status, 
            "tipo" => $type,
            "fecha_modificacion" => $updated
        ));
    }

    public function deleteInventario($id) {                
        return $this->client->deleteInventario(array(
            "id" => $id
        ));
    }

    /*
        ------------------------------------------------
        --------------      Ordenes   ---------------
        ------------------------------------------------
    */

    public function addOrden( $user, $order_date, $status, $deliver_date ) {                
        return $this->client-> addOrden(array(
            "id_usuario" => $user, 
            "fecha" => $order_date, 
            "estado" => $status, 
            "fecha_entrega" => $deliver_date
        ));
    }

    public function editOrden( $id, $user, $order_date, $status, $deliver_date ) {                
        return $this->client-> editOrden(array(
            "id" => $id,
            "id_usuario" => $user, 
            "fecha" => $order_date, 
            "estado" => $status, 
            "fecha_entrega" => $deliver_date
        ));
    }

    public function deleteOrden($id) {                
        return $this->client->deleteOrden(array(
            "id" => $id
        ));
    }

    /*
        ------------------------------------------------
        --------------      Ordenes Detalels     -------
        ------------------------------------------------
    */

    public function addDetalle( $id_order, $id_inventario, $quantity, $cost ) {                
        return $this->client-> addDetalle(array(
            "id_orden" => $id_order, 
            "id_inventario" => $id_inventario, 
            "cantidad" => $quantity, 
            "costo_unitario" => $cost
        ));
    }
    
    public function editDetalle( $id, $id_order, $id_inventario, $quantity, $cost ) {                
        return $this->client-> editDetallle(array(
            "id" => $id,
            "id_orden" => $id_order, 
            "id_inventario" => $id_inventario, 
            "cantidad" => $quantity, 
            "costo_unitario" => $cost
        ));
    }

    public function deleteDetalle($id) {                
        return $this->client->deleteDetalle(array(
            "id" => $id
        ));
    }

}

include('./php/client.php');
$servicio = new SistemaVentas($client);

/*

... Así se consume ...
include('./client.php');
$ventas = new SistemaVentas($client);
echo $ventas->editUser( "2", "git", "98765", "Tester", "11223344", "Zaki", "Hauss" );
echo " <br/> exec @ " . date("Y-m-d H:i:s");

HOLA JOSSSSSSSSSSSSSSSSSSSsss

*/




?>