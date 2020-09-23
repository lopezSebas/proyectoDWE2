<?php
include("menu.php");
?>
<!DOCTYPE html>
<head>
    <script src="https://kit.fontawesome.com/7bf3b56285.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 2</title>
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/script.js?v2"></script>
</head>
<body>
<?php echo menuListado(); ?>
<header id="pageHeader">
    <img src="../res/umg.png" alt="" class="logo">
</header>
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
                    <input type="text" name=""  id="tipo" placeholder="Marca">
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
<?php echo footer(); ?>
</body>