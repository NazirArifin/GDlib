<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagination</title>
	<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
	<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
	<script>
	
var Document = {
	param: {
		dataperpage: 3, // jumlah data per halaman
		query: '',
		curpage: 0,
		numpage: 0
	},
	url: '/test/pagination',
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
				$('#pagination').html(d.pagination);
				Document.param.numpage = d.numpage;
				var t = '', dt = {};
				for (var i = 0; i < d.data.length; i++) {
					dt = d.data[i];
					t += '<tr><td>' + dt.judul +'</td>' + 
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

	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1>Pagination Dokumen</h1>
				<hr>
				<form class="form-inline">
					<input type="text" name="query" id="query" class="input-large"> &nbsp; 
					<button class="btn" onclick="return Document.search()"><i class="icon-search"></i> Cari</button>
				</form>
				<hr>
				<table class="table table-bordered table-condensed table-striped">
					<thead>
						<tr>
							<th>Judul</th>
							<th>Pengarang</th>
							<th>Tahun</th>
						</tr>
					</thead>
					<tbody id="document-data">
						<tr>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
				<hr>
				<div class="pagination pagination-centered pagination-medium" id="pagination">
					<ul>
						<li><a href="">&laquo;</a></li>
						<li><a href="">1</a></li>
						<li><a href="">&raquo;</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>