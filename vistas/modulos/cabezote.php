<!--=====================================
TOP
======================================-->

<div class="container-fluid barraSuperior" id="top">
	
	<div class="container">
		
		<div class="row">
	
			<!--=====================================
			SOCIAL
			======================================-->

			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
				
				<ul>	

					<?php
					
						$social = ControladorPlantilla::ctrEstiloPlantilla();

						$jsonRedesSociales = json_decode($social["redesSociales"], true);						

						foreach ($jsonRedesSociales as $key => $value){
						?>						
							<li>
								<a href="<?php echo $value["url"] ?>" target="_blank">
									<i class="fab <?php echo $value["red"] . " " . $value["estilo"]?> "></i>
								</a>
							</li>
						
						<?php

						}
					
					?>

				</ul>

			</div>

			<!--=====================================
			REGISTRO
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
				
				<ul>
					
					<li><a href="#modalIngreso" data-toggle="modal">Ingresar</a></li>
					<li>|</li>
					<li><a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a></li>

				</ul>

			</div>	

		</div>	

	</div>

</div>

<!--=====================================
HEADER
======================================-->

<header class="container-fluid">
	
	<div class="container">
		
		<div class="row" id="cabezote">

			<!--=====================================
			LOGOTIPO
			======================================-->
			
			<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12" id="logotipo">
				
				<a href="#">
						
					<img src="http://localhost/backend/<?php echo $social["logo"] ?>" class="img-responsive">

				</a>
				
			</div>

			<!--=====================================
			BLOQUE CATEGORÍAS Y BUSCADOR
			======================================-->

			<div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 d-flex" id="bloqueCategorias">
					
				<!--=====================================
				BOTÓN CATEGORÍAS
				======================================-->

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor d-flex justify-content-center align-items-center" id="btnCategorias">
					
					<p class="d-flex text-categoria">CATEGORÍAS
					
						<span class="pull-right">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>
					
					</p>

				</div>

				<!--=====================================
				BUSCADOR
				======================================-->
				
				<div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
					
					<input type="search" name="buscar" class="form-control" placeholder="Buscar...">	

					<span class="input-group-btn">
						
						<a href="#">

							<button class="btn btn-default backColor" type="submit">
								
								<i class="fa fa-search"></i>

							</button>

						</a>

					</span>

				</div>
			
			</div>

			<!--=====================================
			CARRITO DE COMPRAS
			======================================-->

			<div class="col-lg-3 col-md-2 col-sm-4 col-xs-12 d-flex justify-content-end align-items-center" id="carrito">
				
				<a href="#">

					<button class="btn btn-default pull-left backColor"> 
						
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					
					</button>
				
				</a>	

				<p>TU CESTA <span class="cantidadCesta">3</span> <br> USD $ <span class="sumaCesta">20</span></p>	

			</div>

		</div>

		<!--=====================================
		CATEGORÍAS
		======================================-->

		<div class="col-xs-12 backColor" id="categorias">

			<?php

				$columna = null;
				$valor = null;
			
				$categorias = ControladorCategorias::ctrMostrarCategorias($columna, $valor);				
						
			?>
						
			<div class="interno-categorias">
			
				<?php
					foreach ($categorias as $key => $value) {
								
						

					
						echo '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
							
						       	<h4><a href="'.$value["ruta"].'" class="pixelCategorias">'. $value["categoria"] .'</a></h4><hr>	
															
							<ul>';
								
								$columna = "id_categoria";
								$valor = $value["id"];

								$subcategoria = ControladorCategorias::ctrMostrarSubCategorias($columna, $valor);
								foreach ($subcategoria as $key => $value) {

									echo '<li><a href="'.$value["ruta"].'" class="pixelSubCategorias textsub">'. $value["subcategoria"] .'</a></li>';

								}
		
							echo '</ul>

						</div>';	

					}
				?>
			
			</div>

		</div>

	</div>

</header>


