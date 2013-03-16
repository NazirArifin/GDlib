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


/*
$('#hov').mouseover(function(){
	$('#change').show();
});

$('#hov').mouseout(function(){
	$('#change').hide();
});*/