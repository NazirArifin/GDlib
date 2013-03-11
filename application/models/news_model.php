<?php
class News_model extends CI_Model{
	public function search_news() {
		$input = array('dataperpage', 'query', 'curpage', 'status');
		foreach ($input as $val)
			$$val = $this->input->post($val);
		
		$query = $this->db->escape_like_str($query);
		$where = "`JUDUL_NEWS` LIKE '%{$query}%'";
		
		$query = $this->db->query("SELECT COUNT(`ID_NEWS`) AS `HASIL` FROM `tb_news` WHERE ($where) and STATUS_NEWS = '$status'");
		$total = $query->row()->HASIL;
		$npage = ceil($total / $dataperpage);
		
		$start = $curpage * $dataperpage;
		$end = $start + $dataperpage;
		$query = $this->db->query("SELECT * FROM `tb_news` WHERE ($where) AND STATUS_NEWS = '$status' LIMIT $start, $dataperpage");
		$hasil = array(
			'data' => array(),
			'pagination' => '',
			'numpage' => $npage - 1,
		);
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$hasil['data'][] = array(
					'idnews' => $row->ID_NEWS,
					'judulnews' => $row->JUDUL_NEWS,
					'isi' => $row->ISI_NEWS,
					'gambar' => $row->GAMBAR_NEWS,
					'status' => $row->STATUS_NEWS,
					'jam' => $row->JAM_NEWS
				);
			}
		}
		
		$hasil['pagination'] .= '<ul>
			<li class="'. ($curpage == 0 ? 'disabled' : '') .'" onclick="return News.prevPage()"><a href>&laquo;</li>';
		for ($i = 1; $i <= $npage; $i++) {
			$hasil['pagination'] .= '<li class="' . ($curpage == ($i - 1) ? 'active' : '') . '" onclick="return News.setPage(' . ($i - 1) .')"><a href>' . $i . '</a></li>';
		}
		$hasil['pagination'] .= '<li class="' . ($curpage == $npage - 1 ? 'disabled' : '') . '" onclick="return News.nextPage()"><a href>&raquo;</a></li>
			</ul>';
		
		echo json_encode($hasil, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
	}
	
	public function tampilNewsHome(){
		$query=$this->db->query("SELECT * FROM tb_news ORDER BY ID_NEWS DESC LIMIT 0,4");
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
}