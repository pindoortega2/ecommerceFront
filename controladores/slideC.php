<?php

    class controladorSlide {

        static public function ctrMostrarSlide() {

            $tabla = "slide";
            $respuesta = modeloSlide::mdlMostrarSlide($tabla);
            return $respuesta;
        }

    }