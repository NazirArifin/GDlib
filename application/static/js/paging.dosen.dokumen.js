var Jurnal = {
	param: {
		dataperpage: 4, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		kategori: 1,
	},
	url: '/dosen/tampilDokumen/dokumenjurnal',
	search: function() {
		this.param.query = $('#cari-jurnal').val();
		this.param.curpage = 0;
		this.loadData();
		return false;
	},
	setPage: function(n) {
		this.param.curpage = n;
		this.loadData();
		return false;
	},
	prevPage: function() {
		if (this.param.curpage > 0) {
			this.param.curpage--;
			this.loadData();
		}
		return false;
	},
	nextPage: function() {
		if (this.param.curpage < this.param.numpage) {
			this.param.curpage++;
			this.loadData();
		}
		return false;
	},
	loadData: function() {
		$.ajax({
			url: Jurnal.url,
			type: 'POST',
			dataType: 'json',
			data: jQuery.param(Jurnal.param),
			success: function(d) {
				//console.log(d);return;
				$('#pagination-jurnal').html(d.pagination);
				Jurnal.param.numpage = d.numpage;
				var t = '', dt = {};
				for (var i = 0; i < d.data.length; i++) {
					dt = d.data[i];
					t += '<div class="well span5">'+
							'<a href="#Doc"><img src="/' + dt.foto + '" class="thumbnail image-list"></a>'+
								'<h5>' + dt.judul + '</h5>'+
								'<p>' + dt.prolog +'</br>'+
								'<div class="btn-group">'+
								'<a href="/dosen/jurnal/download/'+dt.id+'" target="_blank"class="btn btn-primary btn-mini download-dosen"><i class="icon-download "></i> Download</button>'+
								'<a href="/'+dt.file+'" target="_blank" class="btn btn-mini btn-primary baca-dosen"><i class="icon-play"></i> Baca</a>' +
								'</div>'+
						'</div>';
				}
				$('#dokumen-jurnal').html(t); // id dari tbody tabel data
			}
		});
	}
}
$(document).ready(function() {
	Jurnal.search();
});

var Buku = {
	param: {
		dataperpage: 4, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		kategori: 2,
	},
	url: '/dosen/tampilDokumen/dokumenbuku',
	search: function() {
		this.param.query = $('#cari-buku').val();
		this.param.curpage = 0;
		this.loadData();
		return false;
	},
	setPage: function(n) {
		this.param.curpage = n;
		this.loadData();
		return false;
	},
	prevPage: function() {
		if (this.param.curpage > 0) {
			this.param.curpage--;
			this.loadData();
		}
		return false;
	},
	nextPage: function() {
		if (this.param.curpage < this.param.numpage) {
			this.param.curpage++;
			this.loadData();
		}
		return false;
	},
	loadData: function() {
		$.ajax({
			url: Buku.url,
			type: 'POST',
			dataType: 'json',
			data: jQuery.param(Buku.param),
			success: function(d) {
				//console.log(d);return;
				$('#pagination-buku').html(d.pagination);
				Buku.param.numpage = d.numpage;
				var t = '', dt = {};
				for (var i = 0; i < d.data.length; i++) {
					dt = d.data[i];
					t += '<div class="well span5">'+
							'<a href="#Doc"><img src="/' + dt.foto + '" class="thumbnail image-list"></a>'+
								'<h5>' + dt.judul + '</h5>'+
								'<p>' + dt.prolog +'</br>'+
								'<div class="btn-group">'+
								'<a href="/dosen/buku/download/'+dt.id+'" target="_blank"class="btn btn-primary btn-mini download-dosen"><i class="icon-download "></i> Download</button>'+
								'<a href="/'+dt.file+'" target="_blank" class="btn btn-mini btn-primary baca-dosen"><i class="icon-play"></i> Baca</a>' +
								'</div>'+
						'</div>';
				}
				$('#dokumen-buku').html(t); // id dari tbody tabel data
			}
		});
	}
}
$(document).ready(function() {
	Buku.search();
});

var Modul = {
	param: {
		dataperpage: 4, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		kategori: 3,
	},
	url: '/dosen/tampilDokumen/dokumenmodul',
	search: function() {
		this.param.query = $('#cari-modul').val();
		this.param.curpage = 0;
		this.loadData();
		return false;
	},
	setPage: function(n) {
		this.param.curpage = n;
		this.loadData();
		return false;
	},
	prevPage: function() {
		if (this.param.curpage > 0) {
			this.param.curpage--;
			this.loadData();
		}
		return false;
	},
	nextPage: function() {
		if (this.param.curpage < this.param.numpage) {
			this.param.curpage++;
			this.loadData();
		}
		return false;
	},
	loadData: function() {
		$.ajax({
			url: Modul.url,
			type: 'POST',
			dataType: 'json',
			data: jQuery.param(Modul.param),
			success: function(d) {
				//console.log(d);return;
				$('#pagination-modul').html(d.pagination);
				Modul.param.numpage = d.numpage;
				var t = '', dt = {};
				for (var i = 0; i < d.data.length; i++) {
					dt = d.data[i];
				t += '<div class="well span5">'+
							'<a href="#Doc"><img src="/' + dt.foto + '" class="thumbnail image-list"></a>'+
								'<h5>' + dt.judul + '</h5>'+
								'<p>' + dt.prolog +'</br>'+
								'<div class="btn-group">'+
								'<a href="/dosen/modul/download/'+dt.id+'" target="_blank"class="btn btn-primary btn-mini download-dosen"><i class="icon-download "></i> Download</button>'+
								'<a href="/'+dt.file+'" target="_blank" class="btn btn-mini btn-primary baca-dosen"><i class="icon-play"></i> Baca</a>' +
								'</div>'+
						'</div>';
				}
				$('#dokumen-modul').html(t); // id dari tbody tabel data
			}
		});
	}
}
$(document).ready(function() {
	Modul.search();
});
