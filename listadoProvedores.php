<?php
include ("menu.php")
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
            <a href="crear.php" class="btn-verde" >Crear</a>
            <br>
            <br>
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                <?php
                ?>
                </tbody>
            </table>
        </div>
    </div>
</article>
<?php echo menu(); ?>

</body>