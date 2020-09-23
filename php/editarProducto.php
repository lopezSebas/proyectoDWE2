<?php
include("../php/menu.php");
include('../soap/service.php');
$resultado = $servicio->getProduct($_GET["id"]);
?>
<!DOCTYPE html>
<head>
    <script src="https://kit.fontawesome.com/7bf3b56285.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 2</title>
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
<?php echo menuListado(); ?>
<header id="pageHeader">
    <img src="../res/umg.png" alt="" class="logo">
</header>
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
<?php echo footer(); ?>
</body>
