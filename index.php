<?php

    //Me manda a llamar al controlador de plantillasC
    require_once "controladores/plantillaC.php";
    require_once "modelos/plantillaM.php";

    $plantilla = new ControladorPlantilla();
    $plantilla->plantilla();


?>