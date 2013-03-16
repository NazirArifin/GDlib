var News = {
	param: {
		dataperpage: 3, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		status: 1,
	},
	url: '/admin/news/tampil',
	search: function() {
		this.param.query = $('#query-news').val();
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
			url: News.url,
			type: 'POST',
			dataType: 'json',
			data: jQuery.param(News.param),
			success: function(d) {
				//console.log(d);return;
				$('#pagination-news').html(d.pagination);
				News.param.numpage = d.numpage;
				var t = '', dt = {};
				for (var i = 0; i < d.data.length; i++) {
					dt = d.data[i];
					t += '<tr class="success"><td><a href="#image"><img src="/' + dt.gambar + '" class="img-polaroid" alt=""/></a></td>' + 
						 '<td>' + dt.judulnews + '</td>' + 
						 '<td>' + dt.isi + '</td>' +
						 '<td>' + dt.jam + '</td>' +
						 '<td>' + dt.status + '</td>' +
						 '<td><div class="btn-group">' +
						 '<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>' +
						 '<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>' +
						 '<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>'+
						 '</div></td></tr>';
				}
				$('#document-news').html(t); // id dari tbody tabel data
			}
		});
	}
}

$(document).ready(function() {
	News.search();
});