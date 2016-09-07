
//solo de prueba 
$(document).on("ready", inicio);

function inicio(){
$("#publicar").on("click", mensaje);//click en el boton publicar llama a la funcion mensaje

function mensaje(){
	alert ("Haz presionado el boton");
}