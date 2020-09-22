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

    
    /*
        ------------------------------------------------
        --------------      Usuarios      --------------
        ------------------------------------------------
    */

    
    public function addUser($params) {

        $query = "INSERT INTO public.usuarios(usuario, password, tipo, telefono, nombre, apellido) values('{$params['usuario']}','{$params['password']}','{$params['tipo']}','{$params['telefono']}','{$params['nombre']}','{$params['apellido']}')";
        return pg_query($this->connection, $query) ? $query : false;
    }


    public function editUser($params) {

    $query = "UPDATE public.usuarios set usuario='{$params['usuario']}', password='{$params['password']}', tipo='{$params['tipo']}', telefono='{$params['telefono']}', nombre='{$params['nombre']}', apellido='{$params['apellido']}' where id = {$params['id']}";
        return pg_query($this->connection, $query) ? $query : false;
    }


    public function deleteUser($params) {        
        
        $query = "DELETE FROM public.usuarios where id = {$params['id']}";
        return pg_query($this->connection, $query) ? $query : false;
    }

    /*
        ------------------------------------------------
        --------------      Proveedores   --------------
        ------------------------------------------------
    */

    public function addSupplier($params) {

        $nombre = $params['nombre']; 
        $nit = $params['nit']; 
        $correo = $params['correo']; 
        $telefono = $params['telefono']; 
        $tipo = $params['tipo'];
        
        $query = "INSERT INTO public.proveedores(nombre, nit, correo, telefono, tipo) values( '$nombre', '$nit', '$correo', '$telefono', '$tipo')";
        return pg_query($this->connection, $query) ? $query : false;
    }


    public function editSupplier($params) {

        $id = $params['id'];
        $nombre = $params['nombre']; 
        $nit = $params['nit']; 
        $correo = $params['correo']; 
        $telefono = $params['telefono']; 
        $tipo = $params['tipo'];
        
        $query = "UPDATE public.proveedores set nombre = '$nombre', nit = '$nit', correo = '$correo', telefono = '$telefono', tipo = '$tipo' where id = $id";
        return pg_query($this->connection, $query) ? $query : false;
    }


    public function deleteSupplier($params) {        
        
        $query = "DELETE FROM public.proveedores where id = {$params['id']}";
        return pg_query($this->connection, $query) ? $query : false;
    }

    
    /*
        ------------------------------------------------
        --------------      Sucursales   ---------------
        ------------------------------------------------
    */

    public function addWH($params) {

        $nombre = $params['nombre'];
        $direccion = $params['direccion'];
        $correo = $params['correo'];
        $telefono = $params['telefono'];

        $query = "INSERT INTO public.sucursales(nombre, direccion, correo, telefono) values('$nombre', '$direccion', '$correo', '$telefono')";
        return pg_query($this->connection, $query) ? $query : false;
    }

    public function editWH($params) {

        $id = $params['id'];
        $nombre = $params['nombre'];
        $direccion = $params['direccion'];
        $correo = $params['correo'];
        $telefono = $params['telefono'];

        $query = "UPDATE public.sucursales set nombre='$nombre', direccion='$direccion', correo='$correo', telefono='$telefono' where id = $id";
        return pg_query($this->connection, $query) ? $query : false;
    }

    public function deleteWH($params) {        
        
        $query = "DELETE FROM public.sucursales where id = {$params['id']}";
        return pg_query($this->connection, $query) ? $query : false;
    }

     /*
        ------------------------------------------------
        --------------      Productos   ---------------
        ------------------------------------------------
    */

    public function addProduct($params) {

        $codigo = $params['codigo'];
        $descripcion = $params['descripcion'];
        $marca = $params['marca'];
        $tipo = $params['tipo'];
        $url = $params['url'];

        $query = "INSERT INTO public.productos VALUES(codigo, descripcion, marca, tipo, url) values('$codigo','$descripcion','$marca','$tipo','$url')";
        return pg_query($this->connection, $query) ? $query : false;
    }

    public function editProduct($params) {

        $id = $params['id'];
        $codigo = $params['codigo'];
        $descripcion = $params['descripcion'];
        $marca = $params['marca'];
        $tipo = $params['tipo'];
        $url = $params['url'];

        $query = "UPDATE public.productos set codigo='$codigo', descripcion='$descripcion', marca='$marca', tipo='$tipo', url='$url' where id = $id";
        return pg_query($this->connection, $query) ? $query : false;
    }

    public function deleteProduct($params) {        
        
        $query = "DELETE FROM public.productos where id = {$params['id']}";
        return pg_query($this->connection, $query) ? $query : false;
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
        --------------      Ordenes Detalels    --------
        ------------------------------------------------
    */
    


}

$params = array('uri' => 'localhost/proyectoDWE2/server.php');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();

?>