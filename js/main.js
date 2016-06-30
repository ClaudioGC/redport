
$('.toggle_button_big').on('click',function(){
	$('.form_content').slideToggle('slow');
});

$('#toggle_small_4').on('click',function(){

	var clone = $('#name_list').clone();
	$('.lista_form_1').before(clone);
});

