$(document).ready(function(){

	//Efecto menu
	$('.menu a').each(function(index, elemento){
		$(this).css({
			'top' : '-200px'
		});


		$(this).animate({
			'top' : '0'
		}, 2000 + (index * 500));
	});

	//Efecto header
	if($(window).width() > 800)
	{
		$('header .textos').css({
			opacity: 0,
			marginTop: 0
		});

		$('header .textos').animate({
			opacity: 1,
			marginTop: '-52px'
		}, 1500);
	}

	//Scroll elmentos menu

	/*Primero accedemos a la parte superior de las diferentes secciones para poder llegar a ellas con los botones*/
	var acercaDe = $('#acercaDe').offset().top,
		menu = $('#platillos').offset().top,
		galeria = $('#galeria').offset().top,
		ubicacion = $('#ubicacion').offset().top;

	$('#btnAcercaDe').on('click', function(){
		$('html, body').animate({
			scrollTop: 300 //El efecto parallax genera problemas, por eso lo dejamos en 300
		}, 600); //Tiempo en milisegundos que tardará en llegar hasta esa sección
	});

	$('#btnMenu').on('click', function(){
		$('html, body').animate({
			scrollTop: menu
		}, 1000); //Tiempo en milisegundos que tardará en llegar hasta esa sección
	});

	$('#btnGaleria').on('click', function(){
		$('html, body').animate({
			scrollTop: galeria
		}, 1400); //Tiempo en milisegundos que tardará en llegar hasta esa sección
	});

	$('#btnUbicacion').on('click', function(){
		$('html, body').animate({
			scrollTop: ubicacion
		}, 1800); //Tiempo en milisegundos que tardará en llegar hasta esa sección
	});
});