<?php

session_start();
include_once("../Modelo/usuarioModelo.php");

class UsuarioControlador{
    public $idUsuario;
    public $nombre;
    public $apellido;
    public $documento;
    public $password;
    public $idRol;

    public function ctrIniciarSesion(){
        $objRespuesta = UsuarioModelo::mdlIniciarSesion($this->documento, $this->password);
        echo json_encode($objRespuesta);
    }

}

if (isset($_POST["iniciarSesion"]) == "ok") {
    $objUsuario = new UsuarioControlador();
    $objUsuario->documento = $_POST["documento"];
    $objUsuario->password = $_POST["password"];
    $objUsuario->ctrIniciarSesion();
}