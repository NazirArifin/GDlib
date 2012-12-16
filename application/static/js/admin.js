function tambahDosen(){
	$('#form-tambah').attr('action', '/admin/dosen/add').show('blind', {} , 2500);
	
}

function sclose(){
	$('#nama-user').val('');
	$('#no-induk-user').val('');
	$('#id-facebook').val('');
	$('#form-tambah').hide('blind', {} , 1500, function(){
		$('#view').show('blind', {} , 5500);
	});
}

function cancel(){
	$('#nama-user').val('');
	$('#no-induk-user').val('');
	$('#id-facebook').val('');
	$('#form-tambah').hide('blind', {} , 1500, function(){
		$('#view').show('blind', {} , 5500);
	});
}

function editUserDosen(object, id){
	//alert(id);
	var $form = $('#form-tambah');
	
	$.ajax({
		url: '/admin/dosen/data/' + id,
		dataType: 'json',
		beforeSend: function(){
			
		},
		success: function(o){
			$('#view').hide('blind', {} , 500);
			$('#form-tambah').show('blind', {} , 1500);
			$('#nama-user').val(o[0].NAMA_USER);
			$('#no-induk-user').val(o[0].NO_INDUK_USER);
			$('#id-facebook').val(o[0].ID_FACEBOOK_USER);
		}
	});
}

function simpanUSerDosen(){
	var $form = $('#form-tambah');
	
	$.ajax({
		url: $form.attr('action'),
		dataType: 'json',
		type: $form.attr('method'),
		data: $form.serialize(),
		beforeSend: function(){
			
		},
		success: function(data){
			//console.log(data);
			if (data.success==1){
				$form.find('input').val('');
				alertify.success('Data Sudah Tersimpan');
			}
			else {
				alertify.error('Data Gagal disimpan');
			}
		}
	});
	
	return false;
}