/*=============================================
CABEZOTE
=============================================*/

$("#btnCategorias").click(function(){

	if(window.matchMedia("(min-width:767px)").matches){

		$("#cabezote").after($("#categorias").slideToggle("fast"))

	}else{

		$("#bloqueCategorias").after($("#categorias").slideToggle("fast"))
		
	}

		
})
