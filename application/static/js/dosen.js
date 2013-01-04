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

function editDokumen(object,id){
alert(id);
	var $form = $ ('#form-tambah');

	$.ajax({
		url:'/dosen/dokumen/data/' +id,
		dataType:'json',		
		beforeSend: function(){
		
		},
		success: function(o){
		$('#data-section').hide('blind', {}, 500, function() {
		$('#form-section').show('blind', {}, 500);
		$('#form-tambah').show('blind', {} , 1500);
		});
		}
	});
	
}