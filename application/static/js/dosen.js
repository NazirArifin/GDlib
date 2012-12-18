function tambahjurnal(){
	$('#form-tambah').attr('action', '/dosen/jurnal/add').show('blind', {} , 500);
	$('#form-view-jurnal').hide('blind', {} , 500);	
}
function closejurnal(){
	$('#judul-dokumen').val('');
	$('#pengarang-dokumen').val('');
	$('#prolog-dokumen').val('');
	$('#tahun-penerbitan-dokumen').val('');
	$('#file-dokumen').val('');
	$('#foto-dokumen').val('');
	$('#kata-kunci-dokumen').val('');
	$('#pengarang-dokumen').val('');
	
	$('#form-tambah').hide('blind', {} , 500);
	$('#form-view-jurnal').show('blind', {} , 500);	
}