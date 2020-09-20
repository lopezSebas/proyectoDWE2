<?php 

class client {

    public function __construct() {
        $params = array('location' => 'http://localhost/pedidos-soap/server.php', 'uri' => 'urn://localhost/pedidos-soap/server.php', 'trace' => 1);$this->instance = new SoapClient(NULL, $params);    
    }

    public function addCustomer($params) {
        return $this->instance->__soapCall('addCustomer', array($params));
    }

    public function deleteCustomer($params) {
        return $this->instance->__soapCall('deleteCustomer', array($params));
    }

    public function deleteSupplier($params) {
        return $this->instance->__soapCall('deleteSupplier', array($params));
    }

}

$client = new client;

?>|