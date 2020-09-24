<?php include ("../header.php")?>
<article id="mainArticle">
    <div class="container">
        <div class="content-body">
            <h3>INGRESAR PRODUCTO</h3>
            <form method="post" action="#" enctype="multipart/form-data">
                <div class="formulario">
                    <labe>Codigo</labe>
                    <input type="text" name=""  id="codigo" placeholder="Codigo">
                </div>
                <div class="formulario">
                    <labe>Descripcion</labe>
                    <input type="text" name=""  id="descripcion" placeholder="Descripcion">
                </div>
                <div class="formulario">
                    <labe>Marca</labe>
                    <input type="text" name=""  id="marca" placeholder="Marca">
                </div>
                <div class=formulario">
                    <labe>Tipo</labe>
                    <input type="text" name=""  id="tipo" placeholder="Tipo">
                </div>
                <div class=formulario">
                    <labe>Imagen</labe>
                    <input type="file" name="image"  id="image" >
                </div>
                <input type="hidden" id="urlOld" value="0">
                <input type="button" class="btn-verde upload" value="Guardar">
            </form>
        </div>
    </div>
</article>
<?php include ("../menu.php")?>
<?php include ("../footer.php")?>