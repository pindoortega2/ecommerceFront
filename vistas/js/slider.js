//Variables

var item = 0; //Iniciamos la variable en cero
var itemPaginacion =$("#paginacion li"); //si se saca un console log se vera la matriz de los li
var interrumpirCiclo = false; //variable para interrumpir el ciclo del slider, cuando se preciona el punto para cambiar de slider el contador o el siclo vuelve a contar 3 segundos
var imgProducto = $(".imgProducto");
var titulos1 = $("#slide h1");
var titulos2 = $("#slide h2");
var titulos3 = $("#slide h3");
var btnVerProducto = $("#slide button");
var detenerIntervalo = false; // es para cancelar el slider cuando el mouse este encima del slider
var toogle = false;

/*=============================================
ANIMACIÓN INICIAL
=============================================*/

$(imgProducto[item]).animate({"top":-10 +"%", "opacity": 0}, 800)
$(imgProducto[item]).animate({"top":30 +"px", "opacity": 1}, 1200)

$(titulos1[item]).animate({"top":-10 +"%", "opacity": 0}, 400)
$(titulos1[item]).animate({"top":30 +"px", "opacity": 1}, 800)

$(titulos2[item]).animate({"top":-10 +"%", "opacity": 0}, 400)
$(titulos2[item]).animate({"top":30 +"px", "opacity": 1}, 800)

$(titulos3[item]).animate({"top":-10 +"%", "opacity": 0}, 400)
$(titulos3[item]).animate({"top":30 +"px", "opacity": 1}, 800)

$(btnVerProducto[item]).animate({"top":-10 +"%", "opacity": 0}, 400)
$(btnVerProducto[item]).animate({"top":30 +"px", "opacity": 1}, 800)


/*=====================================
Paginación
================================*/

$("#paginacion li").click(function(){  //al precionar click en la paginación en los puntos del slider 

    item = $(this).attr("item")-1;    //Me trae el numero de slider o item recordando de que en el html tenemos un atributo llamado item y cada uno tiene un valor y lo restamos -1    
    movimientoSlide(item); //ejecutamos la función pasando el valor del item

});

function avanzar() {
    if (item == 3){
        item = 0;
    }else {
        item++;
    }

    movimientoSlide(item);
}


/*===================
Avanzar flechas derecha slider
===================*/

$("#slide #avanzar").click(function(){

    if (item == 3){
        item = 0;
    }else {
        item++;        
    }

    movimientoSlide(item);

});



$("#slide #retroceder").click(function(){

    if (item == 0){
        item = 3;
    }else {
        item--;
    }

    movimientoSlide(item);

});


/*==========================
Movimiento Slide 
========================*/

function movimientoSlide(item) {

    $("#slide ul").animate({"left": item * -100 + "%"}, 1000, "easeInOutElastic"); //tomando en cuenta la clase en su propiedad left realizamos la operación segun lo que envio en el parametro
    $("#paginacion li").css({"opacity": .5});
    $(itemPaginacion[item]).css({"opacity": 1}); //item es el valor de lo que trae el argumento item

    interrumpirCiclo = true;

    $(imgProducto[item]).animate({"top":-10 +"%", "opacity": 0}, 800)
    $(imgProducto[item]).animate({"top":30 +"px", "opacity": 1}, 1200)

    $(titulos1[item]).animate({"top":-10 +"%", "opacity": 0}, 400)
	$(titulos1[item]).animate({"top":30 +"px", "opacity": 1}, 800)

	$(titulos2[item]).animate({"top":-10 +"%", "opacity": 0}, 400)
	$(titulos2[item]).animate({"top":30 +"px", "opacity": 1}, 800)

	$(titulos3[item]).animate({"top":-10 +"%", "opacity": 0}, 400)
	$(titulos3[item]).animate({"top":30 +"px", "opacity": 1}, 800)

	$(btnVerProducto[item]).animate({"top":-10 +"%", "opacity": 0}, 400)
	$(btnVerProducto[item]).animate({"top":30 +"px", "opacity": 1}, 800)

}



/*==========================
Intevalo de tiempo para que el slider se mueva solo
========================*/
setInterval(function() {

    if(interrumpirCiclo) {
        interrumpirCiclo = false;
    }else {

        if(!detenerIntervalo){
			avanzar();
		}
    }
    
}, 3000);


/*=============================================
APARECER FLECHAS
=============================================*/
//Cuando se pasa el mouse por el slider las fechas de avanzar aparecen
$("#slide").mouseover(function(){

	$("#slide #retroceder").css({"opacity":1})
	$("#slide #avanzar").css({"opacity":1})    

	detenerIntervalo = true;

})

//Cuando se pasa el mouse por el slider las fechas de avanzar desaparecen
$("#slide").mouseout(function(){

	$("#slide #retroceder").css({"opacity":0})
	$("#slide #avanzar").css({"opacity":0})

	detenerIntervalo = false;

})


/*=============================================
ESCONDER SLIDE
=============================================*/

$("#btnSlide").click(function(){

	if(!toogle){

		toogle = true;
		$("#slide").slideUp("fast");
		$("#btnSlide").html('<i class="fa fa-angle-down"></i>')
	
	}else{

		toogle = false;
		$("#slide").slideDown("fast");
		$("#btnSlide").html('<i class="fa fa-angle-up"></i>')
	}

})