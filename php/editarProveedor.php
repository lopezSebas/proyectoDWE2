<?php
include('../soap/service.php');
$resultado = $servicio->getSupplier($_GET["id"]);
?>
<?php include("header.php") ?>
    <article id="mainArticle">
        <div class="container">
            <div class="content-body">
                <h3>INGRESAR SUCURSAL</h3>
                <div class="input">
                    <labe>Nombre</labe>
                    <input type="text" name=""  id="nombre" placeholder="Nombre" value="<?php echo $resultado["0"]['nombre']; ?>">
                </div>
                <div class="input">
                    <labe>Nit</labe>
                    <input type="text" name=""  id="nit" placeholder="Nit" value="<?php echo $resultado["0"]['nit']; ?>">
                </div>
                <div class="input">
                    <labe>Correo</labe>
                    <input type="text" name=""  id="correo" placeholder="Correo" value="<?php echo $resultado["0"]['correo']; ?>">
                </div>
                <div class=input">
                    <labe>Teléfono</labe>
                    <input type="text" name=""  id="telefono" placeholder="Télefono" value="<?php echo $resultado["0"]['telefono']; ?>">
                </div>
                <div class=input">
                    <labe>Tipo</labe>
                    <select name="" id="tipo" >
                        <option value="null">Seleccione tipo</option>
                        <?php
                            if($resultado["0"]['tipo'] == "Producto"){
                                echo "<option value=\"Producto\" selected>Producto</option>\n";
                                echo "<option value=\"Envio\">Envio</option>\n";
                            }else{
                                echo "<option value=\"Producto\">Producto</option>\n";
                                echo "<option value=\"Envio\" selected>Envio</option>\n";
                            }
                        ?>
                    </select>
                </div>
                <input type="hidden" id="id" value="<?php echo $_GET["id"] ?>">
                <input type="submit" class="btn-verde" onclick="editarProveedor()" value="Actualizar">
            </div>
        </div>
    </article>
<?php include("menu.php") ?>
<?php include("footer.php") ?>