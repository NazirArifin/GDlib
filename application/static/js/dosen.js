$('a[data-toggle="tab"]').on('shown', function (e) {
	var type = $(e.target).text().toLowerCase();
	$('#kategori-dokumen').val(type);
})

function tambahDokumen(){
	$('#data-section').hide('blind', {}, 500, function() {
		$('#form-tambah').attr('action', '/dosen/dokumen/add');
		$('#form-legend').text($('#kategori-dokumen').val().toUpperCase());
		$('#form-section').show('blind', {}, 500);
	});	
}

function closeForm(){
	$('#form-tambah input, #form-tambah textarea').val('');
	/*
	$('#judul-dokumen').val('');
	$('#pengarang-dokumen').val('');
	$('#prolog-dokumen').val('');
	$('#tahun-penerbitan-dokumen').val('');
	$('#file-dokumen').val('');
	$('#foto-dokumen').val('');
	$('#kata-kunci-dokumen').val('');
	$('#pengarang-dokumen').val('');
	*/
	$('#form-section').hide('blind', {}, 500, function() {
		$('#data-section').show('blind', {}, 500);
	});	
}

function editJurnal(object,id){
alert(id);
	var $form = $('#form-tambah');
	$.ajax({
		url: '/dosen/dokumen/data/' + id,
		dataType: 'json',
		beforeSend: function(){
			
		},
		success: function(o){
			$('#form-tambah').attr('action', '/dosen/dokumen/update');
			$('#view').hide('blind', {} , 500);
			$('#form-tambah').show('blind', {} , 1500);
			$('#judul-dokumen').val(o[0].JUDUL_DOKUMEN);
			$('#pengarang-dokumen').val(o[0].PENGARANG_DOKUMEN);
			$('#prolog-dokumen').val(o[0].PROLOG_DOKUMEN);
		}
	});
}
function tambahJurnal(){
		$('#view').hide('blind', {} , 500);
		$('#form-tambah').show('blind', {} , 500);
}
function tutupJurnal (){
	$('#form-tambah').hide('blind', {} , 500, function(){
		$('#view').show('blind', {} , 500);
	});
}