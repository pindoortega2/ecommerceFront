<?php


    require_once "../modelos/plantillaM.php";
    require_once "../controladores/plantillaC.php";

    class AjaxPlantilla {

        public function ajaxEstiloPlantilla() {

            $respuesta = ControladorPlantilla::ctrEstiloPlantilla();

            echo json_encode($respuesta);

        }

    }

    $objeto = new AjaxPlantilla();
    $objeto->ajaxEstiloPlantilla();


?>