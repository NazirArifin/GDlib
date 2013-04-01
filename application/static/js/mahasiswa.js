function detailDokumen(ob, id){
	//alert(id);
	$.ajax({
		url: '/mahasiswa/jurnal/detail/' + id,
		dataType: 'json',
		beforeSend: function(){
			
		},
		success: function(d){
			console.log(d);
			var t = '';
			t += '<p>Halo</p>';
			$('#aku').html(t);
			//window.location = "/mahasiswa/jurnal/waw";
		}
	});
	return false;
}