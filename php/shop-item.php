<?php
include('../soap/service.php');
if(isset($_SESSION["carrito"])){
    $var = implode(",",$_SESSION["carrito"]);
}else{
    $var = "";
}
?>
    <?php
        foreach ($servicio->listInventario() as $producto){
            echo "<div class=\"shop-item\">";
            echo "<div class=\"shop-item-image\">
                    <img src=\"../imagenes/{$producto["url"]}\">
                </div>\n";
            echo "<div class=\"shop-item-title\">
                    <label for=\"label-item-shop-title\">{$producto["descripcion"]}</label>
                </div>\n";
            echo "<div class=\"shop-item-price\">
                    <label for=\"label-item-shop-price\">{$producto["codigo"]}</label>
                </div>\n";
            echo "<div class=\"shop-item-add\">
                    <button class=\"btn\" onclick=\"agregarCarrito({$producto["id"]},{$_SESSION["id_usuario"]},'$var')\"><i class=\"fas fa-cart-plus\"></i></button>
                </div>\n";
            echo "</div>";
        }
    ?>
    <!--<div class="shop-item-description">
        <label for="label-item-shop-description">Juego de cartas familiar</label>
    </div>-->
