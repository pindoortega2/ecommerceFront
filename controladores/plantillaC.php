<?php

    class ControladorPlantilla {

        
        /*PLANTILLA*/ 

        public function plantilla() {

            include "vistas/plantilla.php";

        }

        static public function ctrEstiloPlantilla() {

            $tabla = "plantilla";

            $respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

            return $respuesta;

        }

    }



?>