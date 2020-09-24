<?php
include ("../header.php");
include('../soap/service.php');
?>
    <article id="mainArticle">
        <div class="container">
            <div class="content-body">
                <h3>LISTADO DE ORDENES</h3>
<!--                <a href="crearInventario.php" class="btn-verde" >INGRESAR COMPRA</a>-->
                <br>
                <br>
                <table>
                    <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Proveedor Servicio</th>
                        <th>Fecha Pedido</th>
                        <th>Estado</th>
                        <th>Fecha Entrega</th>
                        <th>Cancelar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ( $servicio->listOrders() as $array ) {
                        echo "<tr>\n";
                        echo "<td>{$array['id_usuario']}</td>\n";
                        echo "<td>{$array['id_proveedor']}</td>\n";
                        echo "<td>{$array['fecha']}</td>\n";
                        echo "<td>{$array['estado']}</td>\n";
                        echo "<td>{$array['fecha_entrega']}</td>\n";
//                        echo "<td><a href=\"editarInventario.php?id=".$array['id']."\" class=\"btn-amarillo\" >Editar</a></td>";
//                        echo "<td><a onclick='cancelarOrden({$array['id']})' class=\"btn-rojo\" >Cancelar</a></td>";
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