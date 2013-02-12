var Document = {
	param: {
		dataperpage: 2, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0,
		kategori: this.param = $('#id-kategori-dokumen').val(),
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
					t += '<div class="row-fluid data-user alert-success"><div class="span4"><a href="#image" class="thumbnail"><img src="/' + dt.foto +'" alt=""/></a></div>' + 
						 '<div class="span8 btn-group"><h2>' + dt.judul + '</h2>' + 
						 '<h4>' + dt.pengarang + '</h4>' + 
						 '<h5>' + dt.tahun + '</h5>' +
						 '<button class="btn btn-mini btn-info" onClick="editDokumen'+ dt.id_k +'(this, ' + dt.id + ')"><i class="icon-wrench icon-white"></i> Edit</button>' +
						 '<button class="btn btn-mini btn-info" onClick="deleteDokumen'+ dt.id_k +'(this, ' + dt.id + ')"><i class="icon-trash icon-white"></i> Delete</button>' +
						 '<a href="/' + dt.file + '" target="_blank" class="btn btn-mini btn-info" onClick="detailDokumen'+ dt.id_k +'(this, ' + dt.id + ')"><i class="icon-map-marker icon-white"></i> Lihat</a></div></div><hr>';
				}
				$('#document-data').html(t); // id dari tbody tabel data
			}
		});
	}
}

$(document).ready(function() {
	Document.search();
});