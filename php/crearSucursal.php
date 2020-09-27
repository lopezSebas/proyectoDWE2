<?php include("header.php") ?>
    <article id="mainArticle">
        <div class="container">
            <div class="content-body">
                <h3>INGRESAR SUCURSAL</h3>
                <div class="input">
                    <labe>Nombre</labe>
                    <input type="text" name=""  id="nombre" placeholder="Nombre">
                </div>
                <div class="input">
                    <labe>Dirección</labe>
                    <input type="text" name=""  id="direccion" placeholder="Direccion">
                </div>
                <div class="input">
                    <labe>Correo</labe>
                    <input type="text" name=""  id="correo" placeholder="Correo">
                </div>
                <div class=input">
                    <labe>Teléfono</labe>
                    <input type="text" name=""  id="telefono" placeholder="Télefono">
                </div>
                <input type="submit" class="btn-verde" onclick="crearSucursal()" value="Guardar">
            </div>
        </div>
    </article>
<?php include("menu.php") ?>
<?php include("footer.php") ?>