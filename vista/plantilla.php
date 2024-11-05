<?php

session_start();
include_once "vista/modulos/cabecera.php";

if (isset($_SESSION["usuario"])) {
    $rolUsuario = $_SESSION["rol"];


    include_once "vista/modulos/header.php";
    

  


    if (isset($_GET["ruta"])) {

        
        if ($rolUsuario === "admin" && in_array($_GET["ruta"], ["inicio", "moduloAdmin", "mascotas", "cerrarSesion"])) {
            include_once "vista/modulos/" . $_GET["ruta"] . ".php";



        } elseif ($rolUsuario === "estandar" && in_array($_GET["ruta"], ["inicio", "moduloUsuario", "cerrarSesion"])) {
            include_once "vista/modulos/" . $_GET["ruta"] . ".php";



        } else {
            include_once "vista/modulos/404.php";
        }










    } else {

        if ($rolUsuario === "admin") {
            include_once "vista/modulos/moduloAdmin.php";
        } elseif ($rolUsuario === "estandar") {
            include_once "vista/modulos/moduloUsuario.php";
        }
    }
} else {
    
    include_once "vista/modulos/login.php";
}

include_once "vista/modulos/pie.php";
