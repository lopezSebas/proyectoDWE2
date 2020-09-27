<?php session_start();
echo $_SESSION["usuario"];?>
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
                <a href="cart.php"><img src="../res/cart.png" width="15%" title="Carrito" onerror='this.onerror = null; this.src="../res/cart.png"'></a>

            </div>
            <div class="log">
                <a href="login.php">
                    <button type="submit" class="btn-verde">
                        Iniciar Sesión
                    </button>
                </a>
                <a href="registrar.php">
                    <button type="submit" class="btn-amarillo">
                        Registrar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </button>
                </a>
            </div>
        </div>
        <div class="shop-items">
            <?php include("shop-item.php") ?>
        </div>
    </div>
</article>
<?php include("footer.php") ?>
