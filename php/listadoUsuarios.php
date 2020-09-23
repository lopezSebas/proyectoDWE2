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
<header id="pageHeader">
    <img src="../res/umg.png" alt="" class="logo">
</header>
<?php echo menuListado(); ?>
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
<?php echo footer(); ?>
</body>