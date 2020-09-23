<?php
include("menu.php");
include("../soap/service.php");
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
            <h3>LISTADO DE PRODUCTOS</h3>
            <a href="crearProducto.php" class="btn-verde" >Crear Producto</a>
            <br>
            <br>
            <table>
                <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Marca</th>
                    <th>Tipo</th>
                    <th>Imagen</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ( $servicio->listProducts() as $array ) {
                    echo "<tr>\n";
                        echo "<td>{$array['codigo']}</td>\n";
                        echo "<td>{$array['descripcion']}</td>\n";
                        echo "<td>{$array['marca']}</td>\n";
                        echo "<td>{$array['tipo']}</td>\n";
                        echo "<td>{$array['url']}</td>\n";
                        echo "<td><a href=\"editarProducto.php?id=".$array['id']."\" class=\"btn-amarillo\" >Editar</a></td>";
                        echo "<td><a onclick='eliminarProducto({$array['id']})' class=\"btn-rojo\" >Eliminar</a></td>";
                    echo "</tr>\n";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</article>
<?php echo footer(); ?>

</body>