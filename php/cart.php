<?php
session_start();
if(isset($_SESSION["carrito"])){
    $total = count($_SESSION["carrito"]);
}else{
    $total = 0;
}
?>
<!DOCTYPE html>
<head>
    <script src="https://kit.fontawesome.com/7bf3b56285.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 2</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href='../css/main.css' type='text/css' rel='stylesheet'/>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/script.js?v34"></script>
</head>
<body>
<article id="mainArticle">
<div class="cart">
        <div class="cart-data">
            <div class="cart-data-text">
                <input type="hidden" id="totalItems" value="<?php echo $total?>">
                <label>CONFIRMA TU PEDIDO</label>
                <input type="submit" class="btn-verde" onclick="confirmarOrden(<?php echo $_SESSION["id_usuario"]?>)" value="CONFIRMAR">
            </div>
        </div>
        <div class="cart-items">
            <?php include("cart-item.php") ?>
        </div>
    </div>
</article>
<?php include("footer.php") ?>