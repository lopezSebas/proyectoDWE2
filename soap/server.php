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
        --------------      Log in        --------------
        ------------------------------------------------
    */

    public function logIn( $params ) {

        $usuario = $params['usuario'];
        $password = $params['password'];


        $query = "SELECT password FROM public.usuarios where usuario = '$usuario'";
        $result = pg_query($this->connection, $query);
        $row = pg_fetch_assoc($result);
        $real_password = $row['password'];
        #($real_password == $password) ? $_SESSION["usuario"] = $usuario : session_destroy();
        return $real_password == $password; 
    }

    
    /*
        ------------------------------------------------
        --------------      Usuarios      --------------
        ------------------------------------------------
    */

    public function listUsers() {

        $query = "Select * from public.usuarios order by usuario";
        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "usuario" => $row['usuario'],
                "password" => $row['password'],
                "tipo" => $row['tipo'],
                "telefono" => $row['telefono'],
                "nombre" => $row['nombre'],
                "apellido" => $row['apellido']
            ));
        }

        return $data;
    }

    public function getUser($params) {

        $id = $params['id'];
        $query = "Select * from public.usuarios where id = $id";
        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "usuario" => $row['usuario'],
                "password" => $row['password'],
                "tipo" => $row['tipo'],
                "telefono" => $row['telefono'],
                "nombre" => $row['nombre'],
                "apellido" => $row['apellido']
            ));
        }

        return $data;
    }


    public function addUser($params) {

        $query = "INSERT INTO public.usuarios(usuario, password, tipo, telefono, nombre, apellido) values('{$params['usuario']}','{$params['password']}','{$params['tipo']}','{$params['telefono']}','{$params['nombre']}','{$params['apellido']}')";
        return pg_query($this->connection, $query) ? true : false;
    }


    public function editUser($params) {

    $query = "UPDATE public.usuarios set usuario='{$params['usuario']}', password='{$params['password']}', tipo='{$params['tipo']}', telefono='{$params['telefono']}', nombre='{$params['nombre']}', apellido='{$params['apellido']}' where id = {$params['id']}";
        return pg_query($this->connection, $query) ? true : false;
    }


    public function deleteUser($params) {        
        
        $query = "DELETE FROM public.usuarios where id = {$params['id']}";
        return pg_query($this->connection, $query) ? true : false;
    }

    

    /*
        ------------------------------------------------
        --------------      Proveedores   --------------
        ------------------------------------------------
    */

    public function listSuppliers() {

        $query = "Select * from public.proveedores order by nombre";
        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "nombre" => $row['nombre'],
                "nit" => $row['nit'],
                "correo" => $row['correo'],
                "telefono" => $row['telefono'],
                "tipo" => $row['tipo']
            ));
        }

        return $data;
    }

    public function getSupplier($params) {

        $id = $params['id'];
        $query = "Select * from public.proveedores where id = $id";
        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "nombre" => $row['nombre'],
                "nit" => $row['nit'],
                "correo" => $row['correo'],
                "telefono" => $row['telefono'],
                "tipo" => $row['tipo']
            ));
        }

        return $data;
    }

    public function addSupplier($params) {

        $nombre = $params['nombre']; 
        $nit = $params['nit']; 
        $correo = $params['correo']; 
        $telefono = $params['telefono']; 
        $tipo = $params['tipo'];
        
        $query = "INSERT INTO public.proveedores(nombre, nit, correo, telefono, tipo) values( '$nombre', '$nit', '$correo', '$telefono', '$tipo')";
        return pg_query($this->connection, $query) ? true : false;
    }


    public function editSupplier($params) {

        $id = $params['id'];
        $nombre = $params['nombre']; 
        $nit = $params['nit']; 
        $correo = $params['correo']; 
        $telefono = $params['telefono']; 
        $tipo = $params['tipo'];
        
        $query = "UPDATE public.proveedores set nombre = '$nombre', nit = '$nit', correo = '$correo', telefono = '$telefono', tipo = '$tipo' where id = $id";
        return pg_query($this->connection, $query) ? true : false;
    }


    public function deleteSupplier($params) {        
        
        $query = "DELETE FROM public.proveedores where id = {$params['id']}";
        return pg_query($this->connection, $query) ? true : false;
    }

    
    /*
        ------------------------------------------------
        --------------      Sucursales   ---------------
        ------------------------------------------------
    */

    public function listWH() {

        $query = "Select * from public.sucursales order by nombre";
        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "nombre" => $row['nombre'],
                "direccion" => $row['direccion'],
                "correo" => $row['correo'],
                "telefono" => $row['telefono']                
            ));
        }

        return $data;
    }

    public function getWH($params) {

        $id = $params['id'];
        $query = "Select * from public.sucursales where id = $id";
        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "nombre" => $row['nombre'],
                "direccion" => $row['direccion'],
                "correo" => $row['correo'],
                "telefono" => $row['telefono']                
            ));
        }

        return $data;
    }

    public function addWH($params) {

        $nombre = $params['nombre'];
        $direccion = $params['direccion'];
        $correo = $params['correo'];
        $telefono = $params['telefono'];

        $query = "INSERT INTO public.sucursales(nombre, direccion, correo, telefono) values('$nombre', '$direccion', '$correo', '$telefono')";
        return pg_query($this->connection, $query) ? true : false;
    }

    public function editWH($params) {

        $id = $params['id'];
        $nombre = $params['nombre'];
        $direccion = $params['direccion'];
        $correo = $params['correo'];
        $telefono = $params['telefono'];

        $query = "UPDATE public.sucursales set nombre='$nombre', direccion='$direccion', correo='$correo', telefono='$telefono' where id = $id";
        return pg_query($this->connection, $query) ? true : false;
    }

    public function deleteWH($params) {        
        
        $query = "DELETE FROM public.sucursales where id = {$params['id']}";
        return pg_query($this->connection, $query) ? true : false;
    }

     /*
        ------------------------------------------------
        --------------      Productos   ---------------
        ------------------------------------------------
    */

    public function listProducts() {

        $query = "Select * from public.productos order by codigo";
        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "codigo" => $row['codigo'],
                "descripcion" => $row['descripcion'],
                "marca" => $row['marca'],
                "tipo" => $row['tipo'],
                "url" => $row['url']
            ));
        }

        return $data;
    }

    public function getProduct($params) {

        $id = $params['id'];
        $query = "Select * from public.productos where id = $id";
        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "codigo" => $row['codigo'],
                "descripcion" => $row['descripcion'],
                "marca" => $row['marca'],
                "tipo" => $row['tipo'],
                "url" => $row['url']
            ));
        }

        return $data;
    }

    public function addProduct($params) {

        $codigo = $params['codigo'];
        $descripcion = $params['descripcion'];
        $marca = $params['marca'];
        $tipo = $params['tipo'];
        $url = $params['url'];

        $query = "INSERT INTO public.productos(codigo, descripcion, marca, tipo, url) values('$codigo','$descripcion','$marca','$tipo','$url')";
        return pg_query($this->connection, $query) ? true : false;
    }

    public function editProduct($params) {

        $id = $params['id'];
        $codigo = $params['codigo'];
        $descripcion = $params['descripcion'];
        $marca = $params['marca'];
        $tipo = $params['tipo'];
        $url = $params['url'];

        $query = "UPDATE public.productos set codigo='$codigo', descripcion='$descripcion', marca='$marca', tipo='$tipo', url='$url' where id = $id";
        return pg_query($this->connection, $query) ? true : false;
    }

    public function deleteProduct($params) {        
        
        $query = "DELETE FROM public.productos where id = {$params['id']}";
        return pg_query($this->connection, $query) ? true : false;
    }

    /*
        ------------------------------------------------
        --------------      Inventario   ---------------
        ------------------------------------------------
    */

    public function listInventario() {

        $query = 'Select i.id, i.id_producto, p.codigo, p.marca, p.tipo "tipo_producto", p.url, p.descripcion, i.id_sucursal, s.nombre "sucursal", i.id_proveedor, pv.nombre "proveedor", i.estado, i.tipo, i.fecha_modificacion from public.inventario i inner join public.productos p on p.id = i.id_producto inner join public.sucursales s on s.id = i.id_sucursal inner join public.proveedores pv on pv.id = i.id_proveedor order by i.id desc';

        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "id_producto" => $row['id_producto'],
                "codigo" => $row['codigo'],
                "marca" => $row['marca'],
                "tipo_producto" => $row['tipo_producto'],
                "descripcion" => $row['descripcion'],
                "id_sucursal" => $row['id_sucursal'],
                "sucursal" => $row['sucursal'],
                "id_proveedor" => $row['id_proveedor'],
                "proveedor" => $row['proveedor'],
                "estado" => $row['estado'],
                "tipo" => $row['tipo'],
                "fecha_modificacion" => $row['fecha_modificacion']
            ));
        }

        return $data;
    }

    public function listInventarioDisponible() {

        $query = 'Select i.id, i.id_producto, p.codigo, p.marca, p.tipo "tipo_producto", p.url, p.descripcion, i.id_sucursal, s.nombre "sucursal", i.id_proveedor, pv.nombre "proveedor", i.estado, i.tipo, i.fecha_modificacion from public.inventario i inner join public.productos p on p.id = i.id_producto inner join public.sucursales s on s.id = i.id_sucursal inner join public.proveedores pv on pv.id = i.id_proveedor where 
        upper(i.estado) = '."'DISPONIBLE'".' order by i.id desc';

        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "id_producto" => $row['id_producto'],
                "codigo" => $row['codigo'],
                "marca" => $row['marca'],
                "tipo_producto" => $row['tipo_producto'],
                "descripcion" => $row['descripcion'],
                "id_sucursal" => $row['id_sucursal'],
                "sucursal" => $row['sucursal'],
                "id_proveedor" => $row['id_proveedor'],
                "proveedor" => $row['proveedor'],
                "estado" => $row['estado'],
                "tipo" => $row['tipo'],
                "fecha_modificacion" => $row['fecha_modificacion']
            ));
        }

        return $data;
    }

    public function listInventarioEntregado() {

        $query = 'Select i.id, i.id_producto, p.codigo, p.marca, p.tipo "tipo_producto", p.url, p.descripcion, i.id_sucursal, s.nombre "sucursal", i.id_proveedor, pv.nombre "proveedor", i.estado, i.tipo, i.fecha_modificacion from public.inventario i inner join public.productos p on p.id = i.id_producto inner join public.sucursales s on s.id = i.id_sucursal inner join public.proveedores pv on pv.id = i.id_proveedor where 
        upper(i.estado) = '."'ENTREGADO'".' order by i.id desc';

        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "id_producto" => $row['id_producto'],
                "codigo" => $row['codigo'],
                "marca" => $row['marca'],
                "tipo_producto" => $row['tipo_producto'],
                "descripcion" => $row['descripcion'],
                "id_sucursal" => $row['id_sucursal'],
                "sucursal" => $row['sucursal'],
                "id_proveedor" => $row['id_proveedor'],
                "proveedor" => $row['proveedor'],
                "estado" => $row['estado'],
                "tipo" => $row['tipo'],
                "fecha_modificacion" => $row['fecha_modificacion']
            ));
        }

        return $data;
    }

    public function getInventario($params) {

        $id = $params['id'];
        $query = 'Select i.id, i.id_producto, p.codigo, p.marca, p.tipo "tipo_producto", p.url, p.descripcion, i.id_sucursal, s.nombre "sucursal", i.id_proveedor, pv.nombre "proveedor", i.estado, i.tipo, i.fecha_modificacion from public.inventario i inner join public.productos p on p.id = i.id_producto inner join public.sucursales s on s.id = i.id_sucursal inner join public.proveedores pv on pv.id = i.id_proveedor where i.id = '.$id;

        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "id_producto" => $row['id_producto'],
                "codigo" => $row['codigo'],
                "marca" => $row['marca'],
                "tipo_producto" => $row['tipo_producto'],
                "descripcion" => $row['descripcion'],
                "id_sucursal" => $row['id_sucursal'],
                "sucursal" => $row['sucursal'],
                "id_proveedor" => $row['id_proveedor'],
                "proveedor" => $row['proveedor'],
                "estado" => $row['estado'],
                "tipo" => $row['tipo'],
                "fecha_modificacion" => $row['fecha_modificacion']
            ));
        }

        return $data;
    }

    public function addInventario( $params ) {

        $id_producto = $params['id_producto'];
        $id_sucursal = $params['id_sucursal'];
        $id_proveedor = $params['id_proveedor'];
        $estado = $params['estado'];
        $tipo = $params['tipo'];
        $fecha_modificacion = $params['fecha_modificacion'];
        
        $query = "INSERT INTO public.inventario(id_producto, id_sucursal, id_proveedor, estado, tipo, fecha_modificacion) values( $id_producto, $id_sucursal, $id_proveedor,'$estado','$tipo', '$fecha_modificacion')";
        return pg_query($this->connection, $query) ? true : false;
    }

    public function editInventario( $params ) {

        $id = $params['id'];
        $id_producto = $params['id_producto'];
        $id_sucursal = $params['id_sucursal'];
        $id_proveedor = $params['id_proveedor'];
        $estado = $params['estado'];
        $tipo = $params['tipo'];
        $fecha_modificacion = $params['fecha_modificacion'];
        
        $query = "UPDATE public.inventario set id_producto=$id_producto , id_sucursal=$id_sucursal, id_proveedor=$id_proveedor, estado='$estado', tipo='$tipo', fecha_modificacion='$fecha_modificacion' where id=$id";
        return pg_query($this->connection, $query) ? true : false;
    }

    public function deleteInventario($params) {        
        
        $query = "DELETE FROM public.inventario where id = {$params['id']}";
        return pg_query($this->connection, $query) ? true : false;
    }

    /*
        ------------------------------------------------
        --------------      Ordenes   ---------------
        ------------------------------------------------
    */

    public function listOrders() {

        $query = 'select o.id, o.id_usuario , u.usuario , u.nombre , u.apellido , o.id_proveedor , p.nombre "proveedor", o.fecha , o.estado , o.fecha_entrega from ordenes o inner join usuarios u  on u.id = o.id_usuario inner join proveedores p on p.id = o.id_proveedor order by o.id desc';
        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "id_usuario" => $row['id_usuario'],
                "usuario" => $row['usuario'],
                "nombre" => $row['nombre'],
                "apellido" => $row['apellido'],
                "id_proveedor" => $row['id_proveedor'],
                "proveedor" => $row['proveedor'],
                "fecha" => $row['fecha'],
                "estado" => $row['estado'],
                "fecha_entrega" => $row['fecha_entrega']
            ));
        }

        return $data;
    }

    public function getOrder($params) {

        $id = $params['id'];
        $query = 'select o.id, o.id_usuario , u.usuario , u.nombre , u.apellido , o.id_proveedor , p.nombre "proveedor", o.fecha , o.estado , o.fecha_entrega from ordenes o inner join usuarios u  on u.id = o.id_usuario inner join proveedores p on p.id = o.id_proveedor where o.id = '.$id;
        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "id_usuario" => $row['id_usuario'],
                "usuario" => $row['usuario'],
                "nombre" => $row['nombre'],
                "apellido" => $row['apellido'],
                "id_proveedor" => $row['id_proveedor'],
                "proveedor" => $row['proveedor'],
                "fecha" => $row['fecha'],
                "estado" => $row['estado'],
                "fecha_entrega" => $row['fecha_entrega']
            ));
        }

        return $data;
    }

    public function changeOrderStatus ($params) {
        $id = $params['id'];
        $status = $params['estado'];
        $query = "UPDATE public.ordenes set estado = '$status' where id = $id";
        return pg_query($this->connection, $query) ? true : false;
    }

    public function addOrden( $params ) {

        $id_usuario = $params['id_usuario'];
        $id_proveedor = $params['id_proveedor'];
        $fecha = $params['fecha'];
        $estado = $params['estado'];
        $fecha_entrega = $params['fecha_entrega'];        
        
        $query = "INSERT INTO public.ordenes(id_usuario, id_proveedor, fecha, estado, fecha_entrega) values ($id_usuario, $id_proveedor, '$fecha', '$estado', '$fecha_entrega')";
        return pg_query($this->connection, $query) ? true : false;
    }

    public function editOrden( $params ) {
        
        $id = $params['id'];
        $id_usuario = $params['id_usuario'];
        $id_proveedor = $params['id_proveedor'];
        $fecha = $params['fecha'];
        $estado = $params['estado'];
        $fecha_entrega = $params['fecha_entrega'];        
        
        $query = "UPDATE public.ordenes set id_usuario=$id_usuario, id_proveedor=$id_proveedor, fecha='$fecha', estado='$estado', fecha_entrega='$fecha_entrega' where id = $id";
        return pg_query($this->connection, $query) ? true : false;
    }

    public function deleteOrden($params) {        
        
        $query = "DELETE FROM public.ordenes where id = {$params['id']}";
        return pg_query($this->connection, $query) ? true : false;
    }

    /*
        ------------------------------------------------
        --------------      Ordenes Detalels    --------
        ------------------------------------------------
    */

    public function listDetalles() {

        $query = "Select * from public.ordenes_detalles order by id desc";
        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "id_orden" => $row['id_orden'],
                "id_inventario" => $row['id_inventario'],
                "cantidad" => $row['cantidad'],
                "costo_unitario" => $row['costo_unitario']
            ));
        }

        return $data;
    }

    public function getDetalle($params) {

        $id = $params['id'];
        $query = "Select * from public.ordenes_detalles where id = $id";
        $result = pg_query($this->connection, $query);
        
        $data = array();
        while ( $row = pg_fetch_assoc($result) ) {            
            array_push($data, array(
                "id" => $row['id'],
                "id_orden" => $row['id_orden'],
                "id_inventario" => $row['id_inventario'],
                "cantidad" => $row['cantidad'],
                "costo_unitario" => $row['costo_unitario']
            ));
        }

        return $data;
    }

    public function addDetalle( $params ) {

        $id_orden = $params['id_orden'];
        $id_inventario = $params['id_inventario'];
        $cantidad = $params['cantidad'];
        $costo_unitario = $params['costo_unitario'];
        
        
        $query = "INSERT INTO public.ordenes_detalles(id_orden, id_inventario, cantidad, costo_unitario) values ($id_orden, $id_inventario, $cantidad, $costo_unitario)";
        return pg_query($this->connection, $query) ? true : false;
    }

    public function editDetalle( $params ) {

        $id = $params['id'];
        $id_orden = $params['id_orden'];
        $id_inventario = $params['id_inventario'];
        $cantidad = $params['cantidad'];
        $costo_unitario = $params['costo_unitario'];
        
        
        $query = "UPDATE public.ordenes_detalles set id_orden=$id_orden, id_inventario=$id_inventario, cantidad=$cantidad, costo_unitario=$costo_unitario where id = $id";
        return pg_query($this->connection, $query) ? true : false;
    }

    public function deleteDetalle($params) {        
        
        $query = "DELETE FROM public.ordenes_detalles where id = {$params['id']}";
        return pg_query($this->connection, $query) ? true : false;
    }

}

$params = array('uri' => 'localhost/proyectoDWE2/soap/server.php');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();

?>