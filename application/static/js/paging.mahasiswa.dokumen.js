var Jurnal = {
	param: {
		dataperpage: 4, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		kategori: 1,
	},
	url: '/mahasiswa/jurnal/jurnal',
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
					t += '<div class="post-header">' +
						 '<h2 class="post-title"><a href="">' + dt.judul + '</a></h2>' +
						 '<div class="post-date">' +
						 '<h4>1-Jan-13</h4>' +
						 '</div>' +
						 '</div>' +
						 '<div class="post-entry clearfix">' +
						 '<img class="media-object pull-left" style="width: 100px; height: 100px;" src="/' + dt.foto + '">' +
						 '<p>' + dt.prolog + ' <a href="#" onclick="return detailDokumen(this, ' + dt.id + ')">Read more ? </a></p>' +
						 '</div>' +
						 '<ul class="post-meta">' +
						 '<li><i class="icon-user"></i><a href=""> ' + dt.pengarang + '</a></li>' +
						 '<li><i class="icon-comment"></i><a href=""> 2 Comments</a></li>' +
						 '</ul><br><br><hr><br>';
				}
				$('#document-jurnal').html(t); // id dari tbody tabel data
			}
		});
	}
}

var Buku = {
	param: {
		dataperpage: 4, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		kategori: 2,
	},
	url: '/mahasiswa/buku/buku',
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
					t += '<div class="post-header">' +
						 '<h2 class="post-title"><a href="">' + dt.judul + '</a></h2>' +
						 '<div class="post-date">' +
						 '<h4>1-Jan-13</h4>' +
						 '</div>' +
						 '</div>' +
						 '<div class="post-entry clearfix">' +
						 '<img class="media-object pull-left" style="width: 100px; height: 100px;" src="/' + dt.foto + '">' +
						 '<p>' + dt.prolog + ' <a href="/mahasiswa/buku/detail">Read more ? </a></p>' +
						 '</div>' +
						 '<ul class="post-meta">' +
						 '<li><i class="icon-user"></i><a href=""> ' + dt.pengarang + '</a></li>' +
						 '<li><i class="icon-comment"></i><a href="">  2 Comments</a></li>' +
						 '</ul><br><br><hr><br>';
				}
				$('#document-buku').html(t); // id dari tbody tabel data
			}
		});
	}
}

var Modul = {
	param: {
		dataperpage: 4, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		kategori: 3,
	},
	url: '/mahasiswa/modul/modul',
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
					t += '<div class="post-header">' +
						 '<h2 class="post-title"><a href="">' + dt.judul + '</a></h2>' +
						 '<div class="post-date">' +
						 '<h4>1-Jan-13</h4>' +
						 '</div>' +
						 '</div>' +
						 '<div class="post-entry clearfix">' +
						 '<img class="media-object pull-left" style="width: 100px; height: 100px;" src="/' + dt.foto + '">' +
						 '<p>' + dt.prolog + ' <a href="/mahasiswa/modul/detail">Read more ? </a></p>' +
						 '</div>' +
						 '<ul class="post-meta">' +
						 '<li><i class="icon-user"></i><a href=""> ' + dt.pengarang + '</a></li>' +
						 '<li><i class="icon-comment"></i><a href="">  2 Comments</a></li>' +
						 '</ul><br><br><hr><br>';
				}
				$('#document-modul').html(t); // id dari tbody tabel data
			}
		});
	}
}

$(document).ready(function() {
	Jurnal.search();
	Buku.search();
	Modul.search();
});