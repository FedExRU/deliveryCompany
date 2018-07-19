$(document).ready(function(){
	$('form .has-errors input').on('click', function(){
		$(this).parents('.form-group').removeClass('has-errors');
	})
})