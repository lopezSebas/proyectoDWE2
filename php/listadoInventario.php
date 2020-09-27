<?php
include("header.php");
include('../soap/service.php');
?>
    <article id="mainArticle">
        <div class="container">
            <div class="content-body">
                <h3>INVENTARIO</h3>
                <a href="crearInventario.php" class="btn-verde" >INGRESAR COMPRA</a>
                <br>
                <br>
                <table>
                    <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Sucursal</th>
                        <th>Proveedor</th>
                        <th>Estado</th>
<!--                        <th>Tipo</th>-->
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ( $servicio->listInventario() as $array ) {
                        echo "<tr>\n";
                        echo "<td>{$array['descripcion']}</td>\n";
                        echo "<td>{$array['sucursal']}</td>\n";
                        echo "<td>{$array['proveedor']}</td>\n";
                        echo "<td>{$array['estado']}</td>\n";
//                        echo "<td>{$array['tipo']}</td>\n";
                        echo "<td><a href=\"editarInventario.php?id=".$array['id']."\" class=\"btn-amarillo\" >Editar</a></td>";
                        echo "<td><a onclick='eliminarInventario({$array['id']})' class=\"btn-rojo\" >Eliminar</a></td>";
                        echo "</tr>\n";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </article>
<?php include("menu.php") ?>
<?php include("footer.php") ?>