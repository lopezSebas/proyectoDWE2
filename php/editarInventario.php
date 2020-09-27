<?php
include("header.php");
include('../soap/service.php');
$resultado = $servicio->getInventario($_GET["id"]);
?>
    <article id="mainArticle">
        <div class="container">
            <div class="content-body">
                <h3>Editar COMPRA</h3>
                <div class="input">
                    <labe>Producto</labe>
                    <select name="" id="producto" >
                        <option value="null">Seleccione Producto</option>
                        <?php
                        foreach ( $servicio->listProducts() as $array ) {
                            if($resultado["0"]['id_producto'] == $array['id']){
                                echo "<option value=\"{$array['id']}\" selected>{$array['descripcion']} - {$array['marca']}</option>\n";
                            }else{
                                echo "<option value=\"{$array['id']}\">{$array['descripcion']} - {$array['marca']}</option>\n";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="input">
                    <labe>Sucursal</labe>
                    <select name="" id="sucursal" >
                        <option value="null">Seleccione Sucursal</option>
                        <?php
                        foreach ( $servicio->listWH() as $array ) {
                            if($resultado["0"]['id_sucursal'] == $array['id']){
                                echo "<option value=\"{$array['id']}\" selected>{$array['nombre']}</option>\n";
                            }else{
                                echo "<option value=\"{$array['id']}\">{$array['nombre']}</option>\n";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="input">
                    <labe>Proveedor</labe>
                    <select name="" id="proveedor" >
                        <option value="null">Seleccione Proveedor</option>
                        <?php
                        foreach ( $servicio->listSuppliers() as $array ) {
                            if($array['tipo'] == "Producto"){
                                if($resultado["0"]['id_proveedor'] == $array['id']){
                                    echo "<option value=\"{$array['id']}\" selected>{$array['nombre']}</option>\n";
                                }else{
                                    echo "<option value=\"{$array['id']}\">{$array['nombre']}</option>\n";
                                }
                            }
                        }
                        ?>
                    </select>
                </div>
                <input type="hidden" id="id" value="<?php echo $_GET["id"] ?>">
                <input type="submit" class="btn-verde" onclick="editarInventario()" value="Actualizar">
            </div>
        </div>
    </article>
<?php include("menu.php") ?>
<?php include("footer.php") ?>