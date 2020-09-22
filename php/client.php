<?php 

class client {

    public function __construct() {
        $params = array('location' => 'http://localhost/proyectoDWE2/php/server.php', 'uri' => 'urn://localhost/proyectoDWE2/php/server.php', 'trace' => 1);
        $this->instance = new SoapClient(NULL, $params);    
    }

    /*
        ------------------------------------------------
        --------------      Usuarios      --------------
        ------------------------------------------------
    */

    public function listUsers() {
        return $this->instance->__soapCall('listUsers', array(null));
    }

    public function addUser($params) {
        return $this->instance->__soapCall('addUser', array($params));
    }

    public function editUser($params) {
        return $this->instance->__soapCall('editUser', array($params));
    }

    public function deleteUser($params) {
        return $this->instance->__soapCall('deleteUser', array($params));
    }

    /*
        ------------------------------------------------
        --------------      Proveedores   --------------
        ------------------------------------------------
    */

    public function addSupplier($params) {
        return $this->instance->__soapCall('addSupplier', array($params));
    }

    public function editSupplier($params) {
        return $this->instance->__soapCall('editSupplier', array($params));
    }

    public function deleteSupplier($params) {
        return $this->instance->__soapCall('deleteSupplier', array($params));
    }

    /*
        ------------------------------------------------
        --------------      Sucursales   ---------------
        ------------------------------------------------
    */

    public function addWH($params) {
        return $this->instance->__soapCall('addWH', array($params));
    }

    public function editWH($params) {
        return $this->instance->__soapCall('editWH', array($params));
    }

    public function deleteWH($params) {
        return $this->instance->__soapCall('deleteWH', array($params));
    }

    /*
        ------------------------------------------------
        --------------      Productos   ---------------
        ------------------------------------------------
    */

    public function addProduct($params) {
        return $this->instance->__soapCall('addProduct', array($params));
    }

    public function editProduct($params) {
        return $this->instance->__soapCall('editProduct', array($params));
    }

    public function deleteProduct($params) {
        return $this->instance->__soapCall('deleteProduct', array($params));
    }

    /*
        ------------------------------------------------
        --------------      Inventario   ---------------
        ------------------------------------------------
    */

    public function addInventario($params) {
        return $this->instance->__soapCall('addInventario', array($params));
    }

    public function editInventario($params) {
        return $this->instance->__soapCall('editInventario', array($params));
    }

    public function deleteInventario($params) {
        return $this->instance->__soapCall('deleteInventario', array($params));
    }

    /*
        ------------------------------------------------
        --------------      Ordenes   ---------------
        ------------------------------------------------
    */

    public function addOrden($params) {
        return $this->instance->__soapCall('addOrden', array($params));
    }

    public function editOrden($params) {
        return $this->instance->__soapCall('editOrden', array($params));
    }

    public function deleteOrden($params) {
        return $this->instance->__soapCall('deleteOrden', array($params));
    }

    /*
        ------------------------------------------------
        --------------      Ordenes Detalels     -------
        ------------------------------------------------
    */

    public function addDetalle($params) {
        return $this->instance->__soapCall('addDetalle', array($params));
    }

    public function editDetalle($params) {
        return $this->instance->__soapCall('editDetalle', array($params));
    }

    public function deleteDetalle($params) {
        return $this->instance->__soapCall('deleteDetalle', array($params));
    }


}

$client = new client;

?>|