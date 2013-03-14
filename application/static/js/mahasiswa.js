function downloadJurnalMahasiswa(obj, id){
	alert(id);
	$.ajax({
		url: '/mahasiswa/jurnal/data/' + id,
		dataType: 'json',
		beforeSend: function(){
			
		},
		success: function(o){
		alert(o);
			//console.log(o);
			window.location ="/mahasiswa/jurnal/download";
		}
	});
}

function downloadBukuMahasiswa(obj, id){
	alert(id);
}

function downloadModulMahasiswa(obj, id){
	alert(id);
}