<?php
include("header.php");
include('../soap/service.php');
?>
    <article id="mainArticle">
        <div class="container">
            <div class="content-body">
                <h3>INGRESAR COMPRA</h3>
                <div class="input">
                    <labe>Producto</labe>
                    <select name="" id="producto" >
                        <option value="null">Seleccione Producto</option>
                        <?php
                            foreach ( $servicio->listProducts() as $array ) {
                                echo "<option value=\"{$array['id']}\">{$array['descripcion']} - {$array['marca']}</option>\n";
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
                                echo "<option value=\"{$array['id']}\">{$array['nombre']}</option>\n";
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
                                    echo "<option value=\"{$array['id']}\">{$array['nombre']}</option>\n";
                                }
                            }
                        ?>
                    </select>
                </div>
                <input type="submit" class="btn-verde" onclick="crearInventario()" value="Guardar">
            </div>
        </div>
    </article>
<?php include("menu.php") ?>
<?php include("footer.php") ?>