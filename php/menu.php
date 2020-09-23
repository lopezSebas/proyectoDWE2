<?php
function menu(){
    $html = "";
    $html .= "<nav id=\"mainNav\">\n";
    $html .= "<a href=\"home.php\">Inicio</a>\n";
    $html .= "<a href=\"php/listadoProductos.php\">Productos</a>\n";
    $html .= "<a href=\"php/listadoProvedores.php\">Proveedores</a>\n";
    $html .= "<a href=\"php/listadoSucursales.php\">Sucursales</a>\n";
    $html .= "<a href=\"php/listadoUsuarios.php\">Usuarios</a>\n";
    $html .= "<a href=\"php/listadoOrdenes.php\">Ordenes</a>\n";
    $html .= "<a href=\"php/listadoInventario.php\">Inventario</a>\n";
    $html .= "</nav>\n";

    echo $html;
}
function menuListado(){
    $html = "";
    $html .= "<nav id=\"mainNav\">\n";
    $html .= "<a href=\"../home.php\">Inicio</a>\n";
    $html .= "<a href=\"listadoProductos.php\">Productos</a>\n";
    $html .= "<a href=\"listadoProvedores.php\">Proveedores</a>\n";
    $html .= "<a href=\"listadoSucursales.php\">Sucursales</a>\n";
    $html .= "<a href=\"listadoUsuarios.php\">Usuarios</a>\n";
    $html .= "<a href=\"listadoOrdenes.php\">Ordenes</a>\n";
    $html .= "<a href=\"listadoInventario.php\">Inventario</a>\n";
    $html .= "</nav>\n";

    echo $html;
}

function footer(){
    $html = "";
    $html .= "<footer id=\"pageFooter\">\n";
    $html .= "<i class=\"fas fa-user-astronaut\"></i>\n";
    $html .= "<label>Erick Ricardo Batz Cuscul 090-14-4920</label>\n";
    $html .= "<i class=\"fas fa-user-nurse\"></i>\n";
    $html .= "<label>Sebastian Lorenzo Lopez</label>\n";
    $html .= "<i class=\"fas fa-user-secret\"></i>\n";
    $html .= "<label>Luis Andre Morales Acuña</label>\n";
    $html .= "<i class=\"fas fa-user-graduate\"></i>\n";
    $html .= "<label>Joseline Maria Morales Samayoa</label>\n";
    $html .= "</footer>\n";

    echo $html;
}

?>