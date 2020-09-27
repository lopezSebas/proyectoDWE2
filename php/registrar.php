<!DOCTYPE html>
<head>
    <script src="https://kit.fontawesome.com/7bf3b56285.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 2</title>
    <link href='../css/main.css' type='text/css' rel='stylesheet'/>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/script.js?v3"></script>
</head>
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
                <input type="password" name=""  id="pass">
            </div>
            <input type="submit" class="btn-verde" onclick="registrar()" value="Guardar">
        </div>
    </div>
</article>
<?php include("footer.php") ?>