var Document = {
	param: {
		dataperpage: 4, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		kategori: 1,
	},
	url: '/admin/jurnal/cari',
	search: function() {
		this.param.query = $('#query').val();
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
			url: Document.url,
			type: 'POST',
			dataType: 'json',
			data: jQuery.param(Document.param),
			success: function(d) {
				//console.log(d);return;
				$('#pagination').html(d.pagination);
				Document.param.numpage = d.numpage;
				var t = '', dt = {};
				for (var i = 0; i < d.data.length; i++) {
					dt = d.data[i];
					t += '<tr><td>' + dt.id +'</td>' + 
						 '<td>' + dt.judul + '</td>' + 
						 '<td>' + dt.pengarang + '</td>' + 
						 '<td>' + dt.tahun + '</td></tr>';
				}
				$('#document-data').html(t); // id dari tbody tabel data
			}
		});
	}
}

$(document).ready(function() {
	Document.search();
});