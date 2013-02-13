var Document = {
	param: {
		dataperpage: 2, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		level: this.param = $('#level-user').val(),
	},
	url: '/admin/user',
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
					t += '<tr><td>' + dt.nama +'</td>' + 
						 '<td>' + dt.induk + '</td>' + 
						 '<td>' + dt.facebook + '</td>' +
						 '<td><div class="btn-group">' +
						 '<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>' +
						 '<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>' +
						 '<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>'+
						 '</div></td></tr>';
				}
				$('#document-data').html(t); // id dari tbody tabel data
			}
		});
	}
}

$(document).ready(function() {
	Document.search();
});