
//despliegue de las opciones "indica el grado de gravedad"
$('.toggle_button_big').on('click',function(){
	$('.form_content').slideToggle('slow');
});

//añadir o quitar personas a la pregunta "¿están bien?"
$('#toggle_small_4').on('click',function(){

	var clone = $('#name_list').clone();
	$('.lista_form_1').after(clone);
	$('#lista_form_1').appendChild('#name_list');
});

