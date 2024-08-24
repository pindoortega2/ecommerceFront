<?php

    require_once "conexion.php";

    class ModeloPlantilla {

        static public function mdlEstiloPlantilla($tabla) {

            $smtp = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $smtp->execute();
            return $smtp->fetch();

            $smtp->clase();

        }

    }


?>