<?php include ("header.php")?>
<article id="mainArticle">
    <div class="container">
        <div class="content-body">
            <h3>EDITAR USUARIO</h3>
            <div class="input">
                <labe>Nombre</labe>
                <input type="text" name=""  id="nombre" >
            </div>
            <div class="input">
                <labe>Apellido</labe>
                <input type="text" name=""  id="apellido" >
            </div>
            <div class="input">
                <labe>Tipo</labe>
                <select name="" id="tipo" >
                    <option value="null">Seleccione tipo</option>
                    <option value="Colaborador">Colaborador</option>
                    <option value="Cliente">Cliente</option>
                </select>
            </div>
            <div class=input">
                <labe>Telefono</labe>
                <input type="text" name=""  id="telefono" >
            </div>
            <div class=input">
                <labe>Usuario</labe>
                <input type="text" name=""  id="usuario" >
            </div>
            <div class=input">
                <labe>Password</labe>
                <input type="password" name=""  id="pass" >
            </div>
            <input type="hidden" id="id" value="<?php echo $_GET["id"] ?>">
            <input type="submit" class="btn-verde" onclick="editarUsuario()" value="Actualizar">
        </div>
    </div>
</article>
<?php include ("menu.php")?>
<?php include ("footer.php")?>
