function tambahjurnal(){
	$('#form-tambah').attr('action', '/dosen/jurnal/add').show('blind', {} , 2500);
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

function simpanJurnal(){
alert('aaa');
	var $form = $('#form-tambah');
	$.ajax({
		url:$form.attr('action'),
		dataType:'json',
		type:$form.attr('method'),
		data:$form.serialize(),
		beforeSend:function(){
		
		},
		success:function(data){
		console.log(data);
			if (data.success==1){
				$form.find('input').val('');
				alertfy.success('Data Sudah Tersimpan');
				$('#form-tambah').hide('blind',{},1500);
			}
			else{
				alertify.error('Data Tidak Tersimpan');
			}
		}
	});
	
	return false;
}
