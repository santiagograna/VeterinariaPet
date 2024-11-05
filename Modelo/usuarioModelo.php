<?php
include_once "conexion.php";

class UsuarioModelo{

    public static function mdlIniciarSesion($documento, $password){

        $mensaje = array();

        try{
            $query = "SELECT nombre, idRol FROM usuario WHERE documento =:documento AND password =:password";
            
            $objRespuesta = Conexion::conectar()->prepare($query);
            $objRespuesta->bindParam(":documento", $documento);
            $objRespuesta->bindParam(":password", $password);
            $objRespuesta->execute();
            $objUsuario = $objRespuesta->fetch();

            if($objUsuario !=null){
                $_SESSION["usuario"] = $objUsuario["nombre"];
                $_SESSION["rol"] = $objUsuario["idRol"];

                if ($objUsuario["idRol" === "1"]) {
                    $mensaje = array("codigo" => "200", "mensaje" => "El usuario es Administrador", "redirect" => "../modulos/moduloAdmin.php");
                } else if ($objUsuario["idRol"] === "2") {
                    $mensaje = array("codigo" => "200", "mensaje" => "El usuario es estádar", "redirect" => "../modulos/moduloUsuario.php");
                } else {
                    $mensaje = array("codigo" => "403", "mensaje" => "Rol desconocido");
                }
            } else {
                $mensaje = array("codigo" => "401", "mensaje" => "El usuario no existe en la base de datos");
            }

            $objRespuesta = null;

        } catch (Exception $e){
            $mensaje = array("codigo" => "401", "mensaje" => $e->getMessage());
        }
        return $mensaje;
    }

}