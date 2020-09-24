<?php include ("../header.php")?>
<?php
include("../soap/service.php");
?>
    <article id="mainArticle">
        <div class="container">
            <div class="content-body">
                <h3>LISTADO DE PROVEEDORES</h3>
                <a href="crearProveedor.php" class="btn-verde" >Crear Proveedor</a>
                <br>
                <br>
                <table>
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Nit</th>
                        <th>correo</th>
                        <th>Telefono</th>
                        <th>Tipo</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ( $servicio->listSuppliers() as $array ) {
                        echo "<tr>\n";
                        echo "<td>{$array['nombre']}</td>\n";
                        echo "<td>{$array['nit']}</td>\n";
                        echo "<td>{$array['correo']}</td>\n";
                        echo "<td>{$array['telefono']}</td>\n";
                        echo "<td>{$array['tipo']}</td>\n";
                        echo "<td><a href=\"editarProveedor.php?id=".$array['id']."\" class=\"btn-amarillo\" >Editar</a></td>";
                        echo "<td><a onclick='eliminarProveedor({$array['id']})' class=\"btn-rojo\" >Eliminar</a></td>";
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