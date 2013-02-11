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
	$('#id-dokumen').val('');
	$('#judul-dokumen').val('');
	$('#pengarang-dokumen').val('');
	$('#prolog-dokumen').val('');
	$('#tahun-penerbitan-dokumen').val('');
	$('#file-dokumen').val('');
	$('#foto-dokumen').val('');
	$('#kata-kunci-dokumen').val('');
	$('#pengarang-dokumen').val('');
	
	$('#form-section').hide('blind', {}, 500, function() {
		$('#data-section').show('blind', {}, 500);
	});	
}

function editDokumen(object,id){
	//console.log('ha');
	$('#form-legend').text($('#kategori-dokumen').val().toUpperCase());
	var $form = $('#form-tambah');
	$.ajax({
		url: '/dosen/dokumen/data/' + id,
		dataType: 'json',
		beforeSend: function(){
		},
		success: function(o){
			//console.log(o);
			$('#form-tambah').attr('action', '/dosen/dokumen/update');
			$('#data-section').hide('blind', {} , 500);
			$('#form-section').show('blind',{},500);
			$('#form-tambah').show('blind', {} , 1500);
			$('#id-dokumen').val(o[0].ID_DOKUMEN);
			$('#judul-dokumen').val(o[0].JUDUL_DOKUMEN);
			$('#pengarang-dokumen').val(o[0].PENGARANG_DOKUMEN);
			$('#prolog-dokumen').val(o[0].PROLOG_DOKUMEN);
			$('#tahun-penerbitan-dokumen').val(o[0].TAHUN_PENERBITAN_DOKUMEN);
			$('#kata-kunci-dokumen').val(o[0].KATA_KUNCI_DOKUMEN);		
		}
	});

}
function download(object,id){
	//console.log('ha');
	$('#form-legend').text($('#kategori-dokumen').val().toUpperCase());
	var $form = $('#form-tambah');
	$.ajax({
		url: '/dosen/dokumen/data/' + id,
		dataType: 'json',
		beforeSend: function(){
		},
		success: function(o){
			//console.log(o);
			$('#form-tambah').attr('action', '/dosen/dokumen/download');
			
		}
	});

}

function simpanDokumen(object){
	console.log('ha');
	var $form = $('#form-tambah');
	$.ajax({
		url:'/dosen/dokumen/add/',
		dataType: 'json',
		//type:'POST',
		data: $form.serialize(),
		beforeSend: function(){
			
		},
		success: function(o){
			console.log(o); 
			if (data.success==1){
				$form.find('input').val('');
				alertify.success('Data Sudah Tersimpan');
				$('#form-tambah').hide('blind', {} , 1500);
				$('#data-section').show('blind', {} , 1500);
				
			}
			else {
				alertify.error('Data Gagal disimpan');
			}
		}
	});
	
	return false;
}

function deleteDokumen(object, id){
//	$('#form-tambah').attr('action', '/dosen/dokumen/delete');
	var $form = $('#form-tambah');
	
	$.ajax({
		url: '/dosen/dokumen/delete/' + id,
		dataType: 'json',
		
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o); 
			if (o.success==1){
				$form.find('input').val('');
				alertify.success('Data Sudah Terhapus');
				$('#data-section').show('blind', {} , 1500);
				header('location:/dosen');	
			}
			else {
				alertify.error('Data Gagal dihapus');
			}
		}
	});
	//}
	return false;
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