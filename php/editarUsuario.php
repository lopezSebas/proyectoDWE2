<?php
include("../php/menu.php");
include('../soap/service.php');
$resultado = $servicio->getUser($_GET["id"]);
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
            <h3>EDITAR USUARIO</h3>
            <div class="input">
                <labe>Nombre</labe>
                <input type="text" name=""  id="nombre" value="<?php echo $resultado["0"]['nombre']; ?>">
            </div>
            <div class="input">
                <labe>Apellido</labe>
                <input type="text" name=""  id="apellido" value="<?php echo $resultado["0"]['apellido']; ?>">
            </div>
            <div class="input">
                <labe>Tipo</labe>
                <select name="" id="tipo" >
                    <option value="null">Seleccione tipo</option>
                    <?php
                        if($resultado["0"]['tipo'] == "Colaborador"){
                            echo "<option value=\"Colaborador\" selected>Colaborador</option>\n";
                            echo "<option value=\"Cliente\">Cliente</option>\n";
                        }else{
                            echo "<option value=\"Colaborador\">Colaborador</option>\n";
                            echo "<option value=\"Cliente\" selected>Cliente</option>\n";
                        }
                    ?>
                </select>
            </div>
            <div class=input">
                <labe>Telefono</labe>
                <input type="text" name=""  id="telefono" value="<?php echo $resultado["0"]['telefono']; ?>">
            </div>
            <div class=input">
                <labe>Usuario</labe>
                <input type="text" name=""  id="usuario" value="<?php echo $resultado["0"]['usuario']; ?>">
            </div>
            <div class=input">
                <labe>Password</labe>
                <input type="password" name=""  id="pass" value="<?php echo $resultado["0"]['password']; ?>">
            </div>
            <input type="hidden" id="id" value="<?php echo $_GET["id"] ?>">
            <input type="submit" class="btn-verde" onclick="editarUsuario()" value="Actualizar">
        </div>
    </div>
</article>
<?php echo footer(); ?>
</body>
