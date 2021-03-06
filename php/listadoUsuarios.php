<?php
include("../soap/service.php");
?>
<?php include("header.php") ?>
<article id="mainArticle">
    <div class="container">
        <div class="content-body">
            <h3>LISTADO DE USUARIOS</h3>
            <a href="crearUsuario.php" class="btn-verde" >Crear Usuario</a>
            <br>
            <br>
            <table>
                <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Tipo</th>
                    <th>Telefono</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ( $servicio->listUsers() as $usuarios ) {
                    echo "<tr>\n";
                    echo "<td>{$usuarios['usuario']}</td>\n";
                    echo "<td>{$usuarios['nombre']}</td>\n";
                    echo "<td>{$usuarios['apellido']}</td>\n";
                    echo "<td>{$usuarios['tipo']}</td>\n";
                    echo "<td>{$usuarios['telefono']}</td>\n";
                    echo "<td><a href=\"editarUsuario.php?id=".$usuarios['id']."\" class=\"btn-amarillo\" >Editar</a></td>";
                    echo "<td><a onclick='eliminarUsuario({$usuarios['id']})' class=\"btn-rojo\" >Eliminar</a></td>";
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