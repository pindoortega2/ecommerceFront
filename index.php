<?php

    //Llama a los controladores
    require_once "controladores/plantillaC.php";
    require_once "controladores/productosC.php";
    require_once "controladores/productosC.php";
    require_once "controladores/slideC.php";


    //Llama a los modelos
    require_once "modelos/plantillaM.php";
    require_once "modelos/productosM.php";
    require_once "modelos/slideM.php";

    //Llama a la ruta
    require_once "modelos/rutas.php";

    $plantilla = new ControladorPlantilla();
    $plantilla->plantilla();


?>