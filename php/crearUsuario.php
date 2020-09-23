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
            <h3>INGRESAR USUARIO</h3>
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
                    <option value="1">Colaborador</option>
                    <option value="2">Cliente</option>
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
            <input type="submit" class="btn-verde" onclick="crearUsuario()" value="Guardar">
        </div>
    </div>
</article>
<?php echo footer(); ?>
</body>