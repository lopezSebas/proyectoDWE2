<?php
include('../soap/service.php');
$resultado = $servicio->getProduct($_GET["id"]);
?>
<?php include ("../header.php")?>
<article id="mainArticle">
    <div class="container">
        <div class="content-body">
            <h3>EDITAR PRODUCTO</h3>
            <form method="post" action="#" enctype="multipart/form-data">
                <div class="input">
                    <labe>Codigo</labe>
                    <input type="text" name=""  id="codigo" value="<?php echo $resultado["0"]['codigo']; ?>">
                </div>
                <div class="input">
                    <labe>Descripcion</labe>
                    <input type="text" name=""  id="descripcion" value="<?php echo $resultado["0"]['descripcion']; ?>">
                </div>
                <div class="input">
                    <labe>Marca</labe>
                    <input type="text" name=""  id="marca" value="<?php echo $resultado["0"]['marca']; ?>">
                </div>
                <div class=input">
                    <labe>Tipo</labe>
                    <input type="text" name=""  id="tipo" value="<?php echo $resultado["0"]['tipo']; ?>">
                </div>
                <div class=input">
                    <labe>Imagen</labe>
                    <input type="file" name="image"  id="image" >
                </div>
                <input type="hidden" id="id" value="<?php echo $_GET["id"] ?>">
                <input type="hidden" id="urlOld" value="<?php echo $resultado["0"]['url'] ?>">
                <input type="button" class="btn-verde upload" value="Actualizar">
            </form>
        </div>
    </div>
</article>
<?php include ("../menu.php")?>
<?php include ("../footer.php")?>
