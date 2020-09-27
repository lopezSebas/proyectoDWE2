<!DOCTYPE html>
<head>
    <script src="https://kit.fontawesome.com/7bf3b56285.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 2</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href='../css/main.css' type='text/css' rel='stylesheet'/>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/script.js?v3"></script>
</head>    <script src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/login.js"></script>
<article id="mainArticle">
    <div class="login">
        <div class="box">
            <div class="loginTitle">
                <label>INICIAR SESION</label>
            </div>
            <div class="loginUser">
                <input type='text' id='user' placeholder="Usuario" />
            </div>
            <div class="loginPass">
                <input type='password' id='pass' placeholder="Contraseña"/>
            </div>
            <div class="loginBtn">
                <input type="submit" class="btn-verde" onclick="login()" value="INGRESAR"> 
            </div>
        </div>
    </div>
</article>
<?php //include ("menu.php")?>
<?php include("footer.php") ?>