<?php 
    session_start();
    include ("header.php")?>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
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
                <input type="submit" class="btn-verde" value="INGRESAR">
            </div>
        </div>
    </div>
</article>
<?php include ("menu.php")?>
<?php include ("footer.php")?>