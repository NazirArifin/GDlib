//admin dosen
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

function dclose(){
	$('#form-tambah').hide('blind', {} , 1500, function(){
		$('#view').show('blind', {} , 5500);
	});
}

function dcancel(){
	$('#form-tambah').hide('blind', {} , 1500, function(){
		$('#view').show('blind', {} , 5500);
	});
}

function editUser2(object, id){
	//alert(id);
	var $form = $('#form-tambah');
	$.ajax({
		url: '/admin/dosen/data/' + id,
		dataType: 'json',
		beforeSend: function(){
			
		},
		success: function(o){
			$('#form-tambah').attr('action', '/admin/dosen/update');
			$('#view').hide('blind', {} , 500);
			$('#form-tambah').show('blind', {} , 1500);
			$('#id-user').val(o[0].ID_USER);
			$('#nama-user').val(o[0].NAMA_USER);
			$('#no-induk-user').val(o[0].NO_INDUK_USER);
			$('#id-facebook').val(o[0].ID_FACEBOOK_USER);
		}
	});
}

function simpanUSerDosen(){
	var $form = $('#form-tambah'),
		$npm = $('#no-induk-user');
	
	var npm = $npm.val();
	if (npm.match(/[^A-Z]/)) {
		alert('npm tidak valid');
		return false;
	}
	
	
	$.ajax({
		url: $form.attr('action'),
		dataType: 'json',
		type: $form.attr('method'),
		data: $form.serialize(),
		beforeSend: function(){
			
		},
		success: function(data){
			//console.log(data); return;
			if (data.success==1){
				$form.find('input').val('');
				alertify.success('Data Sudah Tersimpan');
				window.location = "/admin/dosen";
			}
			else {
				alertify.error('Data Gagal disimpan');
			}
		}
	});
	
	return false;
}

function deleteUser2(object, id){
//var konfirmasi = confirm("Apakah Anda yakin ingin menghapus Data ini ?");
	//if (konfirmasi == true){
	$('#form-tambah').attr('action', '/admin/dosen/delete');
	var $form = $('#form-tambah');
	
	$.ajax({
		url: '/admin/dosen/delete/' + id,
		dataType: 'json',
		//type: $form.attr('method'),
		//data: $form.serialize(),
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o); ! perhatikan kamu pake var o bkan data
			if (o.success==1){
				$form.find('input').val('');
				alertify.success('Data Sudah Terhapus');
				window.location = "/admin/dosen";
			}
			else {
				alertify.error('Data Gagal dihapus');
			}
		}
	});
	//}
	return false;
}




//admin mahasiswa
function tambahMahasiswa(){
	$('#form-tambah').attr('action', '/admin/mahasiswa/add').show('blind', {} , 2500);
	
}

function editUser3(object, id){
	var $form = $('#form-tambah');
	
	$.ajax({
		url: '/admin/mahasiswa/data/' + id,
		dataType: 'json',
		beforeSend: function(){
			
		},
		success: function(o){
			$('#form-tambah').attr('action', '/admin/mahasiswa/update');
			$('#view').hide('blind', {} , 500);
			$('#form-tambah').show('blind', {} , 1500);
			$('#nama-user').val(o[0].NAMA_USER);
			$('#no-induk-user').val(o[0].NO_INDUK_USER);
			$('#id-facebook').val(o[0].ID_FACEBOOK_USER);
		}
	});
}

function simpanUserMahasiswa(){
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
				window.location = "/admin/mahasiswa";
			}
			else {
				alertify.error('Data Gagal disimpan');
			}
		}
	});
	return false;
}

function deleteUser3(object, id){
//var konfirmasi = confirm("Apakah Anda yakin ingin menghapus Data ini ?");
	//if (konfirmasi == true){
	$('#form-tambah').attr('action', '/admin/mahasiswa/delete');
	var $form = $('#form-tambah');
	
	$.ajax({
		url: '/admin/mahasiswa/delete/' + id,
		dataType: 'json',
		//type: $form.attr('method'),
		//data: $form.serialize(),
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o); ! perhatikan kamu pake var o bkan data
			if (o.success==1){
				$form.find('input').val('');
				alertify.success('Data Sudah Terhapus');
				$('#form-tambah').hide('blind', {} , 1500);
				window.location = "/admin/mahasiswa";
			}
			else {
				alertify.error('Data Gagal dihapus');
			}
		}
	});
	//}
	return false;
}

// DOKUMEN

//jurnal
//tambah
function tambahJurnal(){
	$('#form-tambah').attr('action', '/admin/jurnal/add').show('blind', {} , 2500);
	
}

// edit jurnal

function editDokumen1(object,id){
	var $form = $('#form-tambah');
	$.ajax({
		url: '/admin/jurnal/data/' + id,
		dataType: 'json',
		beforeSend: function(){
			//alert(id);
		},
		success: function(o){
			$('#form-tambah').attr('action', '/admin/jurnal/update');
			$('#form-tambah').show('blind', {} , 1500);
			$('#id-dokumen').val(o[0].ID_DOKUMEN);
			$('#judul-jurnal').val(o[0].JUDUL_DOKUMEN);
			$('#pengarang-jurnal').val(o[0].PENGARANG_DOKUMEN);
			$('#prolog-jurnal').val(o[0].PROLOG_DOKUMEN);
			$('#tahun-penerbitan-jurnal').val(o[0].TAHUN_PENERBITAN_DOKUMEN);
			$('#kata-kunci-jurnal').val(o[0].KATA_KUNCI_DOKUMEN);
			//window.location = "/admin/edit_dokumen";
		}
	});
}

function deleteDokumen1(object, id){
	var $form = $('#form-tambah');
	$.ajax({
		url: '/admin/jurnal/delete/' + id,
		dataType: 'json',
		
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o); 
			if (o.success==1){
				alertify.success('Data Sudah Terhapus');
				window.location = "/admin/jurnal";
			}
			else {
				alertify.error('Data Gagal dihapus');
			}
		}
	});
	//}
	return false;
}

//buku
function tambahBuku(){
	$('#form-tambah').attr('action', '/admin/buku/add').show('blind', {} , 2500);
	
}

function editDokumen2(object,id){
	var $form = $('#form-tambah');
	$.ajax({
		url: '/admin/buku/data/' + id,
		dataType: 'json',
		beforeSend: function(){
		},
		success: function(o){
			$('#form-tambah').attr('action', '/admin/buku/update');
			$('#form-tambah').show('blind', {} , 1500);
			$('#id-dokumen').val(o[0].ID_DOKUMEN);
			$('#judul-buku').val(o[0].JUDUL_DOKUMEN);
			$('#pengarang-buku').val(o[0].PENGARANG_DOKUMEN);
			$('#prolog-buku').val(o[0].PROLOG_DOKUMEN);
			$('#tahun-penerbitan-buku').val(o[0].TAHUN_PENERBITAN_DOKUMEN);
			$('#kata-kunci-buku').val(o[0].KATA_KUNCI_DOKUMEN);
			//window.location = "/admin/edit_dokumen";
	}
	});

}

function deleteDokumen2(object, id){
	var $form = $('#form-tambah');
	$.ajax({
		url: '/admin/buku/delete/' + id,
		dataType: 'json',
		
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o); 
			if (o.success==1){
				alertify.success('Data Sudah Terhapus');
				window.location = "/admin/buku";
			}
			else {
				alertify.error('Data Gagal dihapus');
			}
		}
	});
	//}
	return false;
}

//Modul
function tambahModul(){
	$('#form-tambah').attr('action', '/admin/modul/add').show('blind', {} , 2500);	
}

function editDokumen3(object,id){
	var $form = $('#form-tambah');
	$.ajax({
		url: '/admin/modul/data/' + id,
		dataType: 'json',
		beforeSend: function(){
		},
		success: function(o){
			$('#form-tambah').attr('action', '/admin/modul/update');
			$('#form-tambah').show('blind', {} , 1500);
			$('#id-dokumen').val(o[0].ID_DOKUMEN);
			$('#judul-modul').val(o[0].JUDUL_DOKUMEN);
			$('#pengarang-modul').val(o[0].PENGARANG_DOKUMEN);
			$('#prolog-modul').val(o[0].PROLOG_DOKUMEN);
			$('#tahun-penerbitan-modul').val(o[0].TAHUN_PENERBITAN_DOKUMEN);
			$('#kata-kunci-modul').val(o[0].KATA_KUNCI_DOKUMEN);
			//window.location = "/admin/edit_dokumen";
		}
	});

}

function deleteDokumen3(object, id){
	var $form = $('#form-tambah');
	$.ajax({
		url: '/admin/modul/delete/' + id,
		dataType: 'json',
		
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o); 
			if (o.success==1){
				alertify.success('Data Sudah Terhapus');
				window.location = "/admin/modul";	
			}
			else {
				alertify.error('Data Gagal dihapus');
			}
		}
	});
	//}
	return false;
}

//===== NEWS ========
function tambahNews(){
	$('#form-tambah').attr('action', '/admin/news/add').show('blind', {} , 2500);	
}

function editNews(obj, id){
	var $form = $('#form-tambah');
	$.ajax({
		url: '/admin/news/data/' + id,
		dataType: 'json',
		beforeSend: function(){
		},
		success: function(o){
			$('#form-tambah').attr('action', '/admin/news/update');
			$('#form-tambah').show('blind', {} , 1500);
			$('#id-news').val(o[0].ID_NEWS);
			$('#judul-news').val(o[0].JUDUL_NEWS);
			$('#isi-news').val(o[0].ISI_NEWS);
		}
	});
}

function deleteNews(object, id){
	var $form = $('#form-tambah');
	$.ajax({
		url: '/admin/news/delete/' + id,
		dataType: 'json',
		
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o); 
			if (o.success==1){
				alertify.success('Data Sudah Terhapus');
				window.location = "/admin/news";
			}
			else {
				alertify.error('Data Gagal dihapus');
			}
		}
	});
	return false;
}

//$('.ah').mouseover(function(){
//	$('#form-tambah').show();
//});