<?php

    require_once "conexion.php";

    class modeloSlide {

        static function mdlMostrarSlide($tabla) {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();

            return $stmt->fetchAll();

            $stmt->close();
            $stmt = null;

        }

    }


?>