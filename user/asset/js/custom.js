// custom js
$(document).ready(function(){

	//custom-form-sec form	
	$('.input-bx input,.input-bx textarea').each(function(){
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


