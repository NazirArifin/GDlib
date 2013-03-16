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

$('#edit-profilUser').click(function(){
	
})


/*
$('#hov').mouseover(function(){
	$('#change').show();
});

$('#hov').mouseout(function(){
	$('#change').hide();
});*/