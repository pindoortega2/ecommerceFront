<?php

require_once "conexion.php";

class ModeloProductos {

    static public function mdlMostrarCategorias($tabla, $columna, $valor) {

        if ($columna != null){

            $smtp = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $columna = :$columna");
            $smtp->bindParam(":" .$columna, $valor, PDO::PARAM_STR);

            $smtp->execute();
            return $smtp->fetch();

        }else {

            $smtp = Conexion::conectar()->prepare("SELECT * FROM $tabla ");
            $smtp->execute();

            return $smtp->fetchAll();

        }      

        $smtp->close();
        $smtp = null;


    }


    static public function mdlMostrarSubCategorias($tabla, $columna, $valor) {

        $smtp = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $columna = :$columna");
        $smtp->bindParam(":". $columna, $valor, PDO::PARAM_INT);
        $smtp->execute();

        return $smtp->fetchAll();

        $smtp->close();
        $smtp = null;

    }



}