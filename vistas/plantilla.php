<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <?php
    
        /*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/
		
		$url = Ruta::ctrRuta();
    
    ?>

    <!-- <link rel="stylesheet" href="<?php #echo $url ?>vistas/css/bootstrap.min.css"> -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Estilos funete de texto google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Estilos Personalizados -->
    <link rel="stylesheet" href="<?php echo $url ?>vistas/css/plantilla.css">
    <link rel="stylesheet" href="<?php echo $url ?>vistas/css/cabezote.css">
    <link rel="stylesheet" href="<?php echo $url ?>vistas/css/slide.css">

    <!-- Iconos -->
    <link rel="stylesheet" href="<?php echo $url ?>vistas/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <?php

		$icono = ControladorPlantilla::ctrEstiloPlantilla();

		echo '<link rel="icon" href="http://localhost/backend/'.$icono["icono"].'">';

	?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
        #Incluye la cabecera de la página
        include "modulos/cabezote.php";

        $rutas = array();
        $ruta = null;

        if (isset($_GET["ruta"])) {

            $rutas = explode("/", $_GET["ruta"]);  
                                    
            $columna = "ruta";
            $valor = $rutas[0];

                    
            $rutaCategorias = ControladorCategorias::ctrMostrarCategorias($columna, $valor);

            if (is_array($rutaCategorias) && $valor == $rutaCategorias["ruta"]) {

                $ruta = $valor[0]; //Esto me da como resultado la primera letra de la url osea si estoy en curso la respuesta es solo c

            }


            $rutaSubCategorias = ControladorCategorias::ctrMostrarSubCategorias($columna, $valor);

            foreach ($rutaSubCategorias as $key => $value) {
                
                if($valor == $value["ruta"]){

                    $ruta = $rutas[0];                    

                }

            }
            

            if($ruta != null){
                include "modulos/productos.php";
            }else {
                include "modulos/error.php";
            }    
            
        }else {

            include "modulos/slide.php";

        }
                
    
    ?>
    

    
    <script src="<?php echo $url ?>vistas/plugins/jquery/jquery.min.js"></script>

    <script src="<?php echo $url ?>vistas/js/cabezote.js"></script>
    <script src="<?php echo $url ?>vistas/js/plantilla.js"></script>
    <script src="<?php echo $url ?>vistas/js/slider.js"></script>
    <script src="<?php echo $url ?>vistas/js/plugins/jquery.easing.js"></script>
    
    <!-- Bootstrap 4 -->
    <!-- <script src="<?php #echo $url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>