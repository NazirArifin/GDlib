var News = {
	param: {
		dataperpage: 4, // jumlah data per halaman
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
					t += '<div class="row-fluid data-user alert-success"><div class="span4"><a href="#image" class="thumbnail"><img src="/' + dt.gambar + '" alt=""/></a></div>' + 
						 '<div class="span8 btn-group"><h2>' + dt.judulnews + '</h2>' + 
						 '<h4>' + dt.isi + '</h4>' + 
						 '<h5>' + dt.status + '</h5>' +
						 '<button class="btn btn-mini btn-warning" onClick="editNews(this, ' + dt.idnews + ')"><i class="icon-wrench icon-white"></i> Edit</button>' +
						 '<button class="btn btn-mini btn-danger" onClick="deleteNews(this, ' + dt.idnews + ')"><i class="icon-trash icon-white"></i> Delete</button>' +
						 '<a href="#" class="btn btn-mini btn-info" onClick="detailNews(this, ' + dt.idnews + ')"><i class="icon-map-marker icon-white"></i> Lihat</a></div></div><hr>';
				}
				$('#document-news').html(t); // id dari tbody tabel data
			}
		});
	}
}

$(document).ready(function() {
	News.search();
});