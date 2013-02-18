var Jurnal = {
	param: {
		dataperpage: 2, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		kategori: 1,
	},
	url: '/admin/dokumen/jurnal',
	search: function() {
		this.param.query = $('#query-jurnal').val();
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
					t += '<tr><td>' + dt.judul +'</td>' + 
						 '<td>' + dt.pengarang + '</td>' + 
						 '<td>' + dt.tahun + '</td>' +
						 '<td><div class="btn-group">' +
						 '<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>' +
						 '<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>' +
						 '<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>'+
						 '</div></td></tr>';
				}
				$('#document-jurnal').html(t); // id dari tbody tabel data
			}
		});
	}
}

var Buku = {
	param: {
		dataperpage: 2, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		kategori: 2,
	},
	url: '/admin/dokumen/buku',
	search: function() {
		this.param.query = $('#query-buku').val();
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
					t += '<tr><td>' + dt.judul +'</td>' + 
						 '<td>' + dt.pengarang + '</td>' + 
						 '<td>' + dt.tahun + '</td>' +
						 '<td><div class="btn-group">' +
						 '<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>' +
						 '<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>' +
						 '<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>'+
						 '</div></td></tr>';
				}
				$('#document-buku').html(t); // id dari tbody tabel data
			}
		});
	}
}

var Modul = {
	param: {
		dataperpage: 2, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		kategori: 3,
	},
	url: '/admin/dokumen/modul',
	search: function() {
		this.param.query = $('#query-modul').val();
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
					t += '<tr><td>' + dt.judul +'</td>' + 
						 '<td>' + dt.pengarang + '</td>' + 
						 '<td>' + dt.tahun + '</td>' +
						 '<td><div class="btn-group">' +
						 '<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>' +
						 '<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>' +
						 '<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>'+
						 '</div></td></tr>';
				}
				$('#document-modul').html(t); // id dari tbody tabel data
			}
		});
	}
}

function tabJurnal(){
	$('#query-jurnal').val('');
	Jurnal.search();
	$('#form-jurnal').show();
	$('#form-buku').hide();
	$('#form-modul').hide();
	$('#form-buletin').hide();
}

function tabBuku(){
	$('#query-buku').val('');
	Buku.search();
	$('#form-buku').show();
	$('#form-jurnal').hide();
	$('#form-modul').hide();
	$('#form-buletin').hide();
}

function tabModul(){
	$('#query-modul').val('');
	Modul.search();
	$('#form-modul').show();
	$('#form-jurnal').hide();
	$('#form-buku').hide();
	$('#form-buletin').hide();
}

function tabBuletin(){
	$('#query-buletin').val('');
	$('#form-buletin').show();
	$('#form-jurnal').hide();
	$('#form-buku').hide();
	$('#form-modul').hide();
}

$(document).ready(function() {
	Jurnal.search();
});