var Dosen = {
	param: {
		dataperpage: 4, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		level: 2,
	},
	url: '/admin/user/dosen',
	search: function() {
		this.param.query = $('#query-dosen').val();
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
			url: Dosen.url,
			type: 'POST',
			dataType: 'json',
			data: jQuery.param(Dosen.param),
			success: function(d) {
				//console.log(d);return;
				$('#pagination-dosen').html(d.pagination);
				Dosen.param.numpage = d.numpage;
				var t = '', dt = {};
				for (var i = 0; i < d.data.length; i++) {
					dt = d.data[i];
					t += '<tr><td>' + dt.nama +'</td>' + 
						 '<td>' + dt.induk + '</td>' + 
						 '<td>' + dt.facebook + '</td>' +
						 '<td><div class="btn-group">' +
						 '<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>' +
						 '<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>' +
						 '<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>'+
						 '</div></td></tr>';
				}
				$('#document-dosen').html(t); // id dari tbody tabel data
			}
		});
	}
}

var Mahasiswa = {
	param: {
		dataperpage: 4, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		level: 3,
	},
	url: '/admin/user/mahasiswa',
	search: function() {
		this.param.query = $('#query-mahasiswa').val();
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
			url: Mahasiswa.url,
			type: 'POST',
			dataType: 'json',
			data: jQuery.param(Mahasiswa.param),
			success: function(d) {
				//console.log(d);return;
				$('#pagination-mahasiswa').html(d.pagination);
				Mahasiswa.param.numpage = d.numpage;
				var t = '', dt = {};
				for (var i = 0; i < d.data.length; i++) {
					dt = d.data[i];
					t += '<tr><td>' + dt.nama +'</td>' + 
						 '<td>' + dt.induk + '</td>' + 
						 '<td>' + dt.facebook + '</td>' +
						 '<td><div class="btn-group">' +
						 '<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>' +
						 '<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>' +
						 '<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>'+
						 '</div></td></tr>';
				}
				$('#document-mahasiswa').html(t); // id dari tbody tabel data
			}
		});
	}
}

function tabDosen(){
	$('#query-dosen').val('');
	Dosen.search();
	$('#form-dosen').show();
	$('#form-mahasiswa').hide();
}

function tabMahasiswa(){
	$('#query-mahasiswa').val('');
	Mahasiswa.search();
	$('#form-mahasiswa').show();
	$('#form-dosen').hide();
}
$(document).ready(function() {
	Dosen.search();
});