function login(){
	var $form = $('#form-login');
	$.ajax({
		url: $form.attr('action'),
		//dataType: 'json',
		type: $form.attr('method'),
		data: $form.serialize(),
		beforeSend: function(){
			
		},
		success: function(data){
			console.log(data); return;
		}
	});
}