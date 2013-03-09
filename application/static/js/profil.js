function ubahFotoProfil(){
	$('#change').hide('fade', {} , 100, function(){
		$('#form-change').show('fade', {} , 500);
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