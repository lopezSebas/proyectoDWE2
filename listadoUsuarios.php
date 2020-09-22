<?php
include ("menu.php");
include('./php/service.php');
?>
<!DOCTYPE html>
<head>
    <script src="https://kit.fontawesome.com/7bf3b56285.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 2</title>
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/script.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
<header id="pageHeader">
    <img src="res/umg.png" alt="" class="logo">
</header>
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
                    foreach ($servicio->listUsers() as $usuarios){
                        echo "<tr>\n";
                        foreach ($usuarios as $key => $usuario){
                            if($key != "id"){
                                echo "<td>$usuario</td>\n";
                            }else{
                                echo "<td><a href=\"editarUsuario.php?id=".$usuario."\" class=\"btn-amarillo\" >Editar</a></td>";
                                echo "<td><a onclick='eliminarUsuario($usuario)' class=\"btn-rojo\" >Eliminar</a></td>";
                            }
                        }
                        echo "</tr>\n";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</article>
<?php echo menu(); ?>
</body>