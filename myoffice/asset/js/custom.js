// custom js
$(document).ready(function(){

	$('.accordian-sec .a-title').click(function(){
		$('.accordian-sec .card').removeClass('box-shadow-blue border-transparent');
		$(this).parents('.card').addClass('box-shadow-blue border-transparent');
	});


	//custom-form-sec form
	$('.input-bx input,.input-bx textarea').each(function(e){
		var text_value=$(this).val();
		if(text_value!=''){
			$(this).parent().addClass('floating');
		}
	});

	$('.custom-form-sec .input-bx input, .custom-form-sec .input-bx textarea').change(function(e){
		if($(this).val()!= ''){
			$(this).parent().addClass('floating');
		}else{
			$(this).parent().removeClass('floating');
		}
	});

// document ready end 
});




