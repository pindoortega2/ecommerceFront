<!--=====================================
SLIDESHOW  
======================================-->

<div class="container-fluid" id="slide">
	
	<div class="row">
		
		<!--=====================================
		DIAPOSITIVAS
		======================================-->

		<ul>

			<?php  
			
			
				$slide = controladorSlide::ctrMostrarSlide();
				// echo "<pre>";
				// 	print_r($slide);
				// echo "</pre>";

				foreach ($slide as $key => $value) {

					$estiloImgProducto = json_decode($value["estiloImgProducto"], true);
					$estilotextProducto = json_decode($value["estiloTextoSlide"], true);

					echo '<li>
			
							<img src="http://localhost/backend/'. $value["imgFondo"] .'">

							<div class="slideOpciones ' . $value["tipoSlide"] .'">
								
								<img class="imgProducto" src="http://localhost/backend/' . $value["imgProducto"] .'" style="top:'.$estiloImgProducto["top"].'; right:'.$estiloImgProducto["rigth"].'; width:'.$estiloImgProducto["width"].'; left: '.$estiloImgProducto["left"].'">

								<div class="textosSlide" style="top:'.$estiloTextProducto["top"].'; left:'.$estiloTextProducto["left"].'; width:'.$estiloTextProducto["width"].'; right:'.$estiloTextProducto["right"].'">
									
									<h1 style="color:#333">Lorem Ipsum</h1>

									<h2 style="color:#777">Lorem ipsum dolor sit</h2>

									<h3 style="color:#888">Lorem ipsum dolor sit</h3>

									<a href="#">
										
										<button class="btn btn-default backColor text-uppercase">

										VER PRODUCTO <span class="fa fa-chevron-right"></span>

										</button>

									</a>

								</div>	

							</div>

						</li>';
				}

			?>			

		</ul>

		<!--=====================================
		PAGINACIÓN
		======================================-->

		<ol id="paginacion">

        	<li item="1"><span class="fa fa-circle"></span></li>
			<li item="2"><span class="fa fa-circle"></span></li>
			<li item="3"><span class="fa fa-circle"></span></li>
			<li item="4"><span class="fa fa-circle"></span></li>

		</ol>	

		<!--=====================================
		FLECHAS
		======================================-->	

		<div class="flechas" id="retroceder"><span class="fa fa-chevron-left"></span></div>
		<div class="flechas" id="avanzar"><span class="fa fa-chevron-right"></span></div>

	</div>

</div>

<center>
	
	<button id="btnSlide" class="backColor">
		
			<i class="fa fa-angle-up"></i>

	</button>

</center>