<?php include("header.php") ?>
    <article id="mainArticle">
        <div class="container">
            <div class="content-body">
                <h3>INGRESAR PROVEEDOR</h3>
                <div class="input">
                    <labe>Nombre</labe>
                    <input type="text" name=""  id="nombre" placeholder="Nombre">
                </div>
                <div class="input">
                    <labe>Nit</labe>
                    <input type="text" name=""  id="nit" placeholder="Nit">
                </div>
                <div class="input">
                    <labe>Correo</labe>
                    <input type="text" name=""  id="correo" placeholder="Correo">
                </div>
                <div class=input">
                    <labe>Teléfono</labe>
                    <input type="text" name=""  id="telefono" placeholder="Télefono">
                </div>
                <div class=input">
                    <labe>Tipo</labe>
                    <select name="" id="tipo" >
                        <option value="null">Seleccione tipo</option>
                        <option value="Producto">Producto</option>
                        <option value="Envio">Envio</option>
                    </select>
                </div>
                <input type="submit" class="btn-verde" onclick="crearProveedor()" value="Guardar">
            </div>
        </div>
    </article>
<?php include("menu.php") ?>
<?php include("footer.php") ?>