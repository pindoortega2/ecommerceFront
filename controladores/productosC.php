<?php

class ControladorCategorias {

    static public function ctrMostrarCategorias($columna, $valor) {

            $tabla = "categorias";
            $respuesta = ModeloProductos::mdlMostrarCategorias($tabla, $columna, $valor);

            return $respuesta;
        

    }

    static public function ctrMostrarSubCategorias($columna, $valor) {

        $tabla = "subcategorias";
        $respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla, $columna, $valor);

        return $respuesta;

    }


}