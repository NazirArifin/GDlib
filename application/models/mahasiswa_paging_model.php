<?php
class Mahasiswa_paging_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	
	public function search_document_jurnal() {
		$input = array('dataperpage', 'query', 'curpage', 'kategori');
		foreach ($input as $val)
			$$val = $this->input->post($val);
		
		$query = $this->db->escape_like_str($query);
		$where = "`JUDUL_DOKUMEN` LIKE '%{$query}%' OR `PENGARANG_DOKUMEN` LIKE '%{$query}%'";
		
		$query = $this->db->query("SELECT COUNT(`ID_DOKUMEN`) AS `HASIL` FROM `tb_dokumen` WHERE ($where) and ID_KATEGORI_DOKUMEN = '$kategori'");
		$total = $query->row()->HASIL;
		$npage = ceil($total / $dataperpage);
		
		$start = $curpage * $dataperpage;
		$end = $start + $dataperpage;
		$query = $this->db->query("SELECT `ID_DOKUMEN`, `ID_KATEGORI_DOKUMEN`, `FILE_DOKUMEN`, `FOTO_DOKUMEN`, `JUDUL_DOKUMEN`, `PENGARANG_DOKUMEN`, `TAHUN_PENERBITAN_DOKUMEN` FROM `tb_dokumen` WHERE ($where) AND ID_KATEGORI_DOKUMEN = '$kategori' LIMIT $start, $dataperpage");
		$hasil = array(
			'data' => array(),
			'pagination' => '',
			'numpage' => $npage - 1,
		);
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$hasil['data'][] = array(
					'id' => $row->ID_DOKUMEN,
					'id_k' => $row->ID_KATEGORI_DOKUMEN,
					'file' => $row->FILE_DOKUMEN,
					'foto' => $row->FOTO_DOKUMEN,
					'judul' => $row->JUDUL_DOKUMEN,
					'pengarang' => $row->PENGARANG_DOKUMEN,
					'tahun' => $row->TAHUN_PENERBITAN_DOKUMEN
				);
			}
		}
		
		$hasil['pagination'] .= '<ul>
			<li class="'. ($curpage == 0 ? 'disabled' : '') .'" onclick="return Jurnal.prevPage()"><a href>&laquo;</li>';
		for ($i = 1; $i <= $npage; $i++) {
			$hasil['pagination'] .= '<li class="' . ($curpage == ($i - 1) ? 'active' : '') . '" onclick="return Jurnal.setPage(' . ($i - 1) .')"><a href>' . $i . '</a></li>';
		}
		$hasil['pagination'] .= '<li class="' . ($curpage == $npage - 1 ? 'disabled' : '') . '" onclick="return Jurnal.nextPage()"><a href>&raquo;</a></li>
			</ul>';
		
		echo json_encode($hasil, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
	}
}