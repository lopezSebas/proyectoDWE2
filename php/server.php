<?php 

class server {


    private $connection; 

    public function __construct(){      
        $this->connection = (is_null($this->connection)) ? self::connect() : $this->connection;
    }

    static function connect() {
        
        $host = "dw-12345.postgres.database.azure.com"; 
        $port = "5432";
        $dbname = "postgres";
        $user = "web@dw-12345";
        $password = "Dw1234567890";
        $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
        return  pg_connect($connection_string);

    }


    public function addCustomer($params) {

        $name = $params['nombre'];
        $lastname = $params['apellido'];
        $mail = $params['correo'];
        $phone = $params['telefono'];
        $sql = "INSERT INTO public.clientes(nombre, apellido, correo, telefono) values('$name', '$lastname', '$mail', '$phone')";    
        
        return pg_query($this->connection, $sql) ? true : false;
    }


    public function deleteCustomer($params) {

        $id = $params['id'];
        $sql = "DELETE FROM public.clientes WHERE ID = {$id}";
        return pg_query($this->connection, $sql) ? true : false;
    }



}

$params = array('uri' => 'localhost/pedidos-soap/server.php');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();

?>