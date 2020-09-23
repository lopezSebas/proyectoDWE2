<?php include ("../header.php")?>
<?php
include("../soap/service.php");
?>
<article id="mainArticle">
    <div class="container">
        <div class="content-body">
            <h3>LISTADO DE SUCURSALES</h3>
            <a href="crearSucursal.php" class="btn-verde" >Crear Sucursal</a>
            <br>
            <br>
            <table>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach ( $servicio->listWH() as $array ) {
                        echo "<tr>\n";
                        echo "<td>{$array['nombre']}</td>\n";
                        echo "<td>{$array['direccion']}</td>\n";
                        echo "<td>{$array['correo']}</td>\n";
                        echo "<td>{$array['telefono']}</td>\n";
                        echo "<td><a href=\"editarSucursal.php?id=".$array['id']."\" class=\"btn-amarillo\" >Editar</a></td>";
                        echo "<td><a onclick='eliminarSucursal({$array['id']})' class=\"btn-rojo\" >Eliminar</a></td>";
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