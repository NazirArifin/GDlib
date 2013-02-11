function downloadDokumenJurnal(object,id){
	var $form = $('#form-tambah');
	$.ajax({
		url: '/admin/jurnal/data/' + id,
		dataType: 'json',
		beforeSend: function(){
		},
		success: function(o){
		console.log(o);
			$('#form-tambah').attr('action', '/admin/jurnal/download');
			$('#id-dokumen').val(o[0].FILE_DOKUMEN);
			//window.location = "/admin/edit_dokumen";
		}
	});

}