<?php
include('../soap/service.php');
$resultado = $servicio->getWH($_GET["id"]);
?>
<?php include ("../header.php")?>
    <article id="mainArticle">
        <div class="container">
            <div class="content-body">
                <h3>INGRESAR SUCURSAL</h3>
                <div class="input">
                    <labe>Nombre</labe>
                    <input type="text" name=""  id="nombre" placeholder="Nombre" value="<?php echo $resultado["0"]['nombre']; ?>">
                </div>
                <div class="input">
                    <labe>Dirección</labe>
                    <input type="text" name=""  id="direccion" placeholder="Direccion" value="<?php echo $resultado["0"]['direccion']; ?>">
                </div>
                <div class="input">
                    <labe>Correo</labe>
                    <input type="text" name=""  id="correo" placeholder="Correo" value="<?php echo $resultado["0"]['correo']; ?>">
                </div>
                <div class=input">
                    <labe>Teléfono</labe>
                    <input type="text" name=""  id="telefono" placeholder="Télefono" value="<?php echo $resultado["0"]['telefono']; ?>">
                </div>
                <input type="hidden" id="id" value="<?php echo $_GET["id"] ?>">
                <input type="submit" class="btn-verde" onclick="editarSucursal()" value="Actualizar">
            </div>
        </div>
    </article>
<?php include ("../menu.php")?>
<?php include ("../footer.php")?>