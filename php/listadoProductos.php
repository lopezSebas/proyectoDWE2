<?php
include("../soap/service.php");
?>
<?php include ("../header.php")?>
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
                        echo "<td><img src=\"../imagenes/{$array['url']}\" width='58px'></td>\n";
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
<?php include ("../menu.php")?>
<?php include ("../footer.php")?>