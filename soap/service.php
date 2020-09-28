<?php

class SistemaVentas {

    private $client;

    public function __construct($cliente) {
        $this->client = $cliente;
    }

    /*
        ------------------------------------------------
        --------------      Log in        --------------
        ------------------------------------------------
    */

    public function logIn( $user, $pass ) {
        session_unset();
        $datos = $this->client->logIn(array("usuario" => $user, "password" => $pass));
        $result = false;
        if (!empty( $datos )) {            
            $_SESSION["usuario"] = $user;
            $_SESSION["id_usuario"] = $datos['id'];
            $_SESSION["tipo"] = $datos['tipo'];
            $_SESSION["nombre"] = $datos['nombre'];
            $_SESSION["apellido"] = $datos['apellido'];
            $result = true;
        }

        return $result;
    }

    /*
        ------------------------------------------------
        --------------      Usuarios      --------------
        ------------------------------------------------
    */

    public function listUsers() {
        return $this->client->listUsers();
    }

    public function getUser( $id ) {                
        return $this->client->getUser(array(
            "id" => $id
        ));
    }

    public function getUserId( $user ) {                
        return $this->client->getUserId(array(
            "usuario" => $user
        ));
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

    public function listSuppliers() {
        return $this->client->listSuppliers();
    }

    public function getSupplier( $id ) {                
        return $this->client->getSupplier(array(
            "id" => $id
        ));
    }

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

    public function listWH() {
        return $this->client->listWH();
    }

    public function getWH( $id ) {                
        return $this->client->getWH(array(
            "id" => $id
        ));
    }

    public function addWH( $name, $address, $mail, $phone ) {                
        return $this->client-> addWH(array(
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

    public function listProducts() {
        return $this->client->listProducts();
    }

    public function getProduct( $id ) {                
        return $this->client->getProduct(array(
            "id" => $id
        ));
    }

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

    public function listInventario() {
        return $this->client->listInventario();
    }

    public function listInventarioDisponible() {
        return $this->client->listInventarioDisponible();
    }

    public function listInventarioEntregado() {
        return $this->client->listInventario();
    }

    public function getInventario( $id ) {                
        return $this->client->getInventario(array(
            "id" => $id
        ));
    }

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

    public function listOrders() {
        return $this->client->listOrders();
    }

    public function getOrder( $id ) {                
        return $this->client->getOrder(array(
            "id" => $id
        ));
    }

    public function changeOrderStatus( $id, $status ) {
        return $this->client->changeOrderStatus(array(
            "id" => $id, 
            "estado" => $status
        ));
    }

    public function addOrden( $user, $supplier, $order_date, $status, $deliver_date ) {                
        return $this->client-> addOrden(array(
            "id_usuario" => $user, 
            "id_proveedor" => $supplier, 
            "fecha" => $order_date, 
            "estado" => $status, 
            "fecha_entrega" => $deliver_date
        ));
    }

    public function editOrden( $id, $user, $supplier, $order_date, $status, $deliver_date ) {                
        return $this->client-> editOrden(array(
            "id" => $id,
            "id_usuario" => $user, 
            "id_proveedor" => $supplier,
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

    public function listDetalles() {
        return $this->client->listDetalles();
    }

    public function getDetalle( $id ) {                
        return $this->client->getDetalle(array(
            "id" => $id
        ));
    }

    public function addDetalle( $id_order, $id_inventario, $quantity, $cost ) {                
        return $this->client-> addDetalle(array(
            "id_orden" => $id_order, 
            "id_inventario" => $id_inventario, 
            "cantidad" => $quantity, 
            "costo_unitario" => $cost
        ));
    }
    
    public function editDetalle( $id, $id_order, $id_inventario, $quantity, $cost ) {                
        return $this->client-> editDetalle(array(
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

include('../soap/client.php');
$servicio = new SistemaVentas($client);

?>