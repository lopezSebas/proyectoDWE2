<?php session_start();
?>
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
    <div id="index">
        <div class="items-header">
            <div class="search">
                <input id="search" class="search" placeholder="Search">
            </div>
            <div class="pa">
                 <?php
                    if($_SESSION["tipo"] == ""){
                        echo "<a href=\"login.php\" onclick=\"alert('Para ingresar al carrito debe iniciar Sesión')\"><img src=\"../res/cart.png\" width=\"15%\" title=\"Carrito\" onerror='this.onerror = null; this.src=\"../res/cart.png\"'></a>";
                    }else{
                        echo "<a href=\"cart.php\"><img src=\"../res/cart.png\" width=\"15%\" title=\"Carrito\" onerror='this.onerror = null; this.src=\"../res/cart.png\"'></a>";
                    }
                ?>
            </div>
            <?php
                if($_SESSION["tipo"] == ""){
                    echo "
                      <div class=\"log\">
                        <a href=\"login.php\">
                            <button type=\"submit\" class=\"btn-verde\">
                                Iniciar Sesión
                            </button>
                        </a>
                        <a href=\"registrar.php\">
                            <button type=\"submit\" class=\"btn-amarillo\">
                                Registrar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </button>
                        </a>
                    </div>";
                }else {
                    echo "
                      <div class=\"log\">
                        <a href=\"javascript:cerrarSesion()\">
                            <button type=\"submit\" class=\"btn-verde\">
                                Cerrar Sesión&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </button>
                        </a>
                        <button type=\"submit\" class=\"btn-amarillo\">
                            Bienvenido {$_SESSION["nombre"]} {$_SESSION["apellido"]}
                        </button>
                    </div>";
                }
            ?>
        </div>
        <div class="shop-items">
            <?php include("shop-item.php") ?>
        </div>
    </div>
</article>
<?php include("footer.php") ?>
