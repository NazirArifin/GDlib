<?php
class Dokumen_model extends CI_Model{
	public function search_document() {
		$input = array('dataperpage', 'query', 'curpage');
		foreach ($input as $val)
			$$val = $this->input->post($val);
		
		$query = $this->db->escape_like_str($query);
		$where = "`JUDUL_DOKUMEN` LIKE '%{$query}%' OR `PENGARANG_DOKUMEN` LIKE '%{$query}%'";
		
		$query = $this->db->query("SELECT COUNT(`ID_DOKUMEN`) AS `HASIL` FROM `tb_dokumen` WHERE $where");
		$total = $query->row()->HASIL;
		$npage = ceil($total / $dataperpage);
		
		$start = $curpage * $dataperpage;
		$end = $start + $dataperpage;
		$query = $this->db->query("SELECT `ID_KATEGORI_DOKUMEN`, `JUDUL_DOKUMEN`, `PENGARANG_DOKUMEN`, `TAHUN_PENERBITAN_DOKUMEN` FROM `tb_dokumen` WHERE $where LIMIT $start, $end");
		$hasil = array(
			'data' => array(),
			'pagination' => '',
			'numpage' => $npage - 1,
		);
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$hasil['data'][] = array(
					'id' => $row->ID_KATEGORI_DOKUMEN,
					'judul' => $row->JUDUL_DOKUMEN,
					'pengarang' => $row->PENGARANG_DOKUMEN,
					'tahun' => $row->TAHUN_PENERBITAN_DOKUMEN
				);
			}
		}
		
		$hasil['pagination'] .= '<ul>
			<li class="'. ($curpage == 0 ? 'disabled' : '') .'" onclick="return Document.prevPage()"><a href>&laquo;</li>';
		for ($i = 1; $i <= $npage; $i++) {
			$hasil['pagination'] .= '<li class="' . ($curpage == ($i - 1) ? 'active' : '') . '" onclick="return Document.setPage(' . ($i - 1) .')"><a href>' . $i . '</a></li>';
		}
		$hasil['pagination'] .= '<li class="' . ($curpage == $npage - 1 ? 'disabled' : '') . '" onclick="return Document.nextPage()"><a href>&raquo;</a></li>
			</ul>';
		
		echo json_encode($hasil, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
	}
}