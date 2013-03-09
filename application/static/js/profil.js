function ubahFotoProfil(obj, id){
	$.ajax({
			url: '/mahasiswa/profilmahasiswa/data/' + id,
			dataType: 'json',
			beforeSend: function(){
				
			},
			success: function(o){
				//console.log(o);
				$('#change').hide('fade', {} , 100, function(){
					$('#form-change').show('fade', {} , 500);
				});
				$('#form-change').attr('action', '/mahasiswa/profilmahasiswa/ubah');				
				$('#id-profil').val(o[0].ID_PROFIL);
			}
		});
}

function cancelChange(){
	$('#form-change').hide('fade', {} , 100, function(){
		$('#change').show('fade', {} , 500);
	});
}
/*
$('#hov').mouseover(function(){
	$('#change').show();
});

$('#hov').mouseout(function(){
	$('#change').hide();
});*/