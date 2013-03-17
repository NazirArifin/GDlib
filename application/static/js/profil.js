function ubahFotoProfil(obj, id){
	$.ajax({
		url: '/mahasiswa/profilmahasiswa/ambil/' + id,
		dataType: 'json',
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o);
			$('#change').hide('fade', {} , 100, function(){
				$('#form-change').show('fade', {} , 500);
				$('#ubah').attr('disabled','disabled');
			});
			$('#form-change').attr('action', '/mahasiswa/profilmahasiswa/foto');				
			$('#id-profil').val(o[0].ID_PROFIL);
		}
	});
}

function cancelChange(){
	$('#form-change').hide('fade', {} , 100, function(){
		$('#change').show('fade', {} , 500);
		$('#change-foto').val('');
	});
}

$('#change-foto').change(function(){
	$('#ubah').attr('disabled',false);
})

function editProfilMahasiswa(obj, id){
	$.ajax({
		url: '/mahasiswa/profilmahasiswa/ambil/' + id,
		dataType: 'json',
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o);
			$('#form-profil').attr('action', '/mahasiswa/profilmahasiswa/data');	
			$('#profil-id').val(o[0].ID_PROFIL);
			$('#nama-mahasiswa').val(o[0].NAMA_PROFIL);
			$('#tempat-mahasiswa').val(o[0].TEMPAT_LAHIR);
			$('#tanggal-mahasiswa').val(o[0].TGL_LAHIR);
			$('#alamat-mahasiswa').val(o[0].ALAMAT_PROFIL);
			$('#mail-mahasiswa').val(o[0].EMAIL_PROFIL);
			$('#no-hp').val(o[0].NO_HP_PROFIL);
			(o[0].JENIS_KELAMIN == 'L' ? $('#laki-laki').attr('checked','checked') : $('#perempuan').attr('checked','checked'));
			(o[0].TAMPIL_EMAIL_PROFIL == 'Y' ? $('#tampil-email').attr('checked','checked') : $('#jangan-email').attr('checked','checked'));
			(o[0].TAMPIL_NO_HP_PROFIL == 'Y' ? $('#tampil-hp').attr('checked','checked') : $('#jangan-hp').attr('checked','checked'));
		}
	});
}

function simpanEditProfilMahasiswa(){
	var $form = $('#form-profil');
	$.ajax({
		url: $form.attr('action'),
		dataType: 'json',
		type: $form.attr('method'),
		data: $form.serialize(),
		beforeSend: function(){
			
		},
		success: function(o){
		//console.log(o);
		$('#edit-profil').modal('hide');
			if (o.success==1){
				alertify.success('Data Sudah Tersimpan');
				window.location = "/mahasiswa/profilmahasiswa";
			}
			else {
				alertify.error('Data Gagal disimpan');
			}
		}
	});
}


/*
$('#hov').mouseover(function(){
	$('#change').show();
});

$('#hov').mouseout(function(){
	$('#change').hide();
});*/