/*=============================================
CABEZOTE
=============================================*/
/* En este script se controla el funcionamiento de ocultar y desocultar la caja de las categorias*/

$("#btnCategorias").click(function(){

	if(window.matchMedia("(max-width: 767px)").matches){ //se evalua el tamaño de la pantalla y mediante el punto de quiebre se determina la posicion en donde apareceran las categorias
		$("#btnCategorias").after($("#categorias").slideToggle("fast")) //Se indica que aparezca la caja del cabezote con un slideToggle de forma rapida debajo de btnCategorias
	}else{
		$("#cabezote").after($("#categorias").slideToggle("fast")) //Se indica que aparezca la caja del cabezote con un slideToggle de forma rapida debajo del cabezote
	}
	
})    