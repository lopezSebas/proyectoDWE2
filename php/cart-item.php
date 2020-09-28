<?php
include('../soap/service.php');
if(isset($_SESSION["carrito"])){
    $total = count($_SESSION["carrito"]);
    $var = implode(",",$_SESSION["carrito"]);
}else{
    $var = "";
}
?>
<?php
if(isset($_SESSION["carrito"])){

    $i = 0;
    foreach ($_SESSION["carrito"] as $key => $id){
        $producto = $servicio->getInventario($id);
        echo "<div class=\"shop-item\">";
        echo "<div class=\"shop-item-image\">
                <img src=\"../imagenes/{$producto["0"]["url"]}\">
            </div>\n";
        echo "<div class=\"shop-item-title\">
                <label for=\"label-item-shop-title\">{$producto["0"]["descripcion"]}</label>
            </div>\n";
        echo "<div class=\"shop-item-price\">
                <label for=\"label-item-shop-price\">{$producto["0"]["codigo"]}</label>
            </div>\n";
        echo "<input type=\"hidden\" id=\"id{$i}\" value=\"{$producto["0"]["id"]}\">\n";
        echo "<div class=\"shop-item-add\">
                <button class=\"btn\" onclick=\"eliminarItem('$key','$var')\"><i class=\"fas fa-trash\"></i></button>
            </div>\n";
        echo "</div>";
        $i++;
    }}
?>