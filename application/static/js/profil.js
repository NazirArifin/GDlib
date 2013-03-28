function ubahFotoProfilDosen(obj, id){
	$.ajax({
		url: '/dosen/profildosen/ambil/' + id,
		dataType: 'json',
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o);
			$('#change-dosen').hide('fade', {} , 100, function(){
				$('#form-change-dosen').show('fade', {} , 500);
				$('#ubah-dosen').attr('disabled','disabled');
			});
			$('#form-change-dosen').attr('action', '/dosen/profildosen/foto');				
			$('#id-profil-dosen').val(o[0].ID_PROFIL);
		}
	});
	return false;
}

function cancelChangeDosen(){
	$('#form-change-dosen').hide('fade', {} , 100, function(){
		$('#change-dosen').show('fade', {} , 500);
		$('#change-foto-dosen').val('');
	});
	return false;
}

$('#change-foto-dosen').change(function(){
	$('#ubah-dosen').attr('disabled',false);
})

function editProfilDosen(obj, id){
	$.ajax({
		url: '/dosen/profildosen/ambil/' + id,
		dataType: 'json',
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o);
			$('#tampilkan').hide('clip', {} , 800, function(){
				$('#form-profil-dosen').show('clip', {}, 800);
				$('#form-profil-dosen').attr('action', '/dosen/profildosen/data');	
				$('#profil-id-dosen').val(o[0].ID_PROFIL);
				$('#nama-dosen').val(o[0].NAMA_PROFIL);
				$('#tempat-dosen').val(o[0].TEMPAT_LAHIR);
				$('#tanggal-dosen').val(o[0].TGL_LAHIR);
				$('#alamat-dosen').val(o[0].ALAMAT_PROFIL);
				$('#mail-dosen').val(o[0].EMAIL_PROFIL);
				$('#no-hp-dosen').val(o[0].NO_HP_PROFIL);
				(o[0].JENIS_KELAMIN == 'L' ? $('#laki-laki-dosen').attr('checked','checked') : $('#perempuan-dosen').attr('checked','checked'));
				(o[0].TAMPIL_EMAIL_PROFIL == 'Y' ? $('#tampil-email-dosen').attr('checked','checked') : $('#jangan-email-dosen').attr('checked','checked'));
				(o[0].TAMPIL_NO_HP_PROFIL == 'Y' ? $('#tampil-hp-dosen').attr('checked','checked') : $('#jangan-hp-dosen').attr('checked','checked'));
				$('#satu').hide('fade', {}, 200, function(){
					$('#dua').show('fade', {}, 200);
				});
			});
		}
	});
	return false;
}

function simpanEditProfilDosen(){
	var $form = $('#form-profil-dosen');
	$.ajax({
		url: $form.attr('action'),
		dataType: 'json',
		type: $form.attr('method'),
		data: $form.serialize(),
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o);
			if (o.success==1){
				alertify.success('Data Sudah Tersimpan');
				window.location = "/dosen/profildosen";
			}
			else {
				alertify.error('Data Gagal disimpan');
			}
		}
	});
	return false;
}

function cancelEditProfilDosen(){
	$('#form-profil-dosen').hide('clip', {} , 800, function(){
		$('#tampilkan').show('clip', {}, 800);
		$('#dua').hide('fade', {}, 200, function(){
			$('#satu').show('fade', {}, 200);
		});
	});
	return false;
}

// mahasiswa
function ubahFotoProfilMahasiswa(obj, id){
	$.ajax({
		url: '/mahasiswa/profilmahasiswa/ambil/' + id,
		dataType: 'json',
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o);
			$('#change-mahasiswa').hide('fade', {} , 100, function(){
				$('#form-change-mahasiswa').show('fade', {} , 500);
				$('#ubah-mahasiswa').attr('disabled','disabled');
			});
			$('#form-change-mahasiswa').attr('action', '/mahasiswa/profilmahasiswa/foto');				
			$('#id-profil-mahasiswa').val(o[0].ID_PROFIL);
		}
	});
	return false;
}

function cancelChangeMahasiswa(){
	$('#form-change-mahasiswa').hide('fade', {} , 100, function(){
		$('#change-mahasiswa').show('fade', {} , 500);
		$('#change-foto-mahasiswa').val('');
	});
	return false;
}

$('#change-foto-mahasiswa').change(function(){
	$('#ubah-mahasiswa').attr('disabled',false);
})

function editProfilMahasiswa(obj, id){
	$.ajax({
		url: '/mahasiswa/profilmahasiswa/ambil/' + id,
		dataType: 'json',
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o);
			$('#tampilkan').hide('clip', {} , 800, function(){
				$('#form-profil-mahasiswa').show('clip', {}, 800);
				$('#form-profil-mahasiswa').attr('action', '/mahasiswa/profilmahasiswa/data');	
				$('#profil-id-mahasiswa').val(o[0].ID_PROFIL);
				$('#nama-mahasiswa').val(o[0].NAMA_PROFIL);
				$('#tempat-mahasiswa').val(o[0].TEMPAT_LAHIR);
				$('#tanggal-mahasiswa').val(o[0].TGL_LAHIR);
				$('#alamat-mahasiswa').val(o[0].ALAMAT_PROFIL);
				$('#mail-mahasiswa').val(o[0].EMAIL_PROFIL);
				$('#no-hp-mahasiswa').val(o[0].NO_HP_PROFIL);
				(o[0].JENIS_KELAMIN == 'L' ? $('#laki-laki-mahasiswa').attr('checked','checked') : $('#perempuan-mahasiswa').attr('checked','checked'));
				(o[0].TAMPIL_EMAIL_PROFIL == 'Y' ? $('#tampil-email-mahasiswa').attr('checked','checked') : $('#jangan-email-mahasiswa').attr('checked','checked'));
				(o[0].TAMPIL_NO_HP_PROFIL == 'Y' ? $('#tampil-hp-mahasiswa').attr('checked','checked') : $('#jangan-hp-mahasiswa').attr('checked','checked'));
				$('#1').hide('fade', {}, 200, function(){
					$('#2').show('fade', {}, 200);
				});
			});
		}
	});
	return false;
}

function simpanEditProfilMahasiswa(){
	var $form = $('#form-profil-mahasiswa');
	$.ajax({
		url: $form.attr('action'),
		dataType: 'json',
		type: $form.attr('method'),
		data: $form.serialize(),
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o);
			if (o.success==1){
				alertify.success('Data Sudah Tersimpan');
				window.location = "/mahasiswa/profilmahasiswa";
			}
			else {
				alertify.error('Data Gagal disimpan');
			}
		}
	});
	return false;
}

function cancelEditProfilMahasiswa(){
	$('#form-profil-mahasiswa').hide('clip', {} , 800, function(){
		$('#tampilkan').show('clip', {}, 800);
		$('#2').hide('fade', {}, 200, function(){
			$('#1').show('fade', {}, 200);
		});
	});
	return false;
}