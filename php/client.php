<?php 

class client {

    public function __construct() {
        $params = array('location' => 'http://localhost/proyectoDWE2/php/server.php', 'uri' => 'urn://localhost/proyectoDWE2/php/server.php', 'trace' => 1);$this->instance = new SoapClient(NULL, $params);    
    }

    /*
        ------------------------------------------------
        --------------      Usuarios      --------------
        ------------------------------------------------
    */

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

    /*
        ------------------------------------------------
        --------------      Ordenes   ---------------
        ------------------------------------------------
    */

    /*
        ------------------------------------------------
        --------------      Ordenes Detalels     -------
        ------------------------------------------------
    */


}

$client = new client;

?>|