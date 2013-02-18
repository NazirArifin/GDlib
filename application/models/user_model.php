<?php
class User_model extends CI_Model{
	public function search_user() {
		$input = array('dataperpage', 'query', 'curpage', 'level');
		foreach ($input as $val)
			$$val = $this->input->post($val);
		
		$query = $this->db->escape_like_str($query);
		$where = "`NAMA_USER` LIKE '%{$query}%'";
		
		$query = $this->db->query("SELECT COUNT(`ID_USER`) AS `HASIL` FROM `tb_user` WHERE ($where) and ID_LEVEL_USER = '$level'");
		$total = $query->row()->HASIL;
		$npage = ceil($total / $dataperpage);
		
		$start = $curpage * $dataperpage;
		$end = $start + $dataperpage;
		$query = $this->db->query("SELECT * FROM `tb_user` WHERE ($where) AND ID_LEVEL_USER = '$level' LIMIT $start, $end");
		$hasil = array(
			'data' => array(),
			'pagination' => '',
			'numpage' => $npage - 1,
		);
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$hasil['data'][] = array(
					'id' => $row->ID_USER,
					'id_l' => $row->ID_LEVEL_USER,
					'nama' => $row->NAMA_USER,
					'aktivitas' => $row->AKTIVITAS_USER,
					'induk' => $row->NO_INDUK_USER,
					'facebook' => $row->ID_FACEBOOK_USER
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
	
	public function search_user_dosen() {
		$input = array('dataperpage', 'query', 'curpage', 'level');
		foreach ($input as $val)
			$$val = $this->input->post($val);
		
		$query = $this->db->escape_like_str($query);
		$where = "`NAMA_USER` LIKE '%{$query}%'";
		
		$query = $this->db->query("SELECT COUNT(`ID_USER`) AS `HASIL` FROM `tb_user` WHERE ($where) and ID_LEVEL_USER = '$level'");
		$total = $query->row()->HASIL;
		$npage = ceil($total / $dataperpage);
		
		$start = $curpage * $dataperpage;
		$end = $start + $dataperpage;
		$query = $this->db->query("SELECT * FROM `tb_user` WHERE ($where) AND ID_LEVEL_USER = '$level' LIMIT $start, $end");
		$hasil = array(
			'data' => array(),
			'pagination' => '',
			'numpage' => $npage - 1,
		);
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$hasil['data'][] = array(
					'id' => $row->ID_USER,
					'id_l' => $row->ID_LEVEL_USER,
					'nama' => $row->NAMA_USER,
					'aktivitas' => $row->AKTIVITAS_USER,
					'induk' => $row->NO_INDUK_USER,
					'facebook' => $row->ID_FACEBOOK_USER
				);
			}
		}
		
		$hasil['pagination'] .= '<ul>
			<li class="'. ($curpage == 0 ? 'disabled' : '') .'" onclick="return Dosen.prevPage()"><a href>&laquo;</li>';
		for ($i = 1; $i <= $npage; $i++) {
			$hasil['pagination'] .= '<li class="' . ($curpage == ($i - 1) ? 'active' : '') . '" onclick="return Dosen.setPage(' . ($i - 1) .')"><a href>' . $i . '</a></li>';
		}
		$hasil['pagination'] .= '<li class="' . ($curpage == $npage - 1 ? 'disabled' : '') . '" onclick="return Dosen.nextPage()"><a href>&raquo;</a></li>
			</ul>';
		
		echo json_encode($hasil, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
	}
	
	public function search_user_mahasiswa() {
		$input = array('dataperpage', 'query', 'curpage', 'level');
		foreach ($input as $val)
			$$val = $this->input->post($val);
		
		$query = $this->db->escape_like_str($query);
		$where = "`NAMA_USER` LIKE '%{$query}%'";
		
		$query = $this->db->query("SELECT COUNT(`ID_USER`) AS `HASIL` FROM `tb_user` WHERE ($where) and ID_LEVEL_USER = '$level'");
		$total = $query->row()->HASIL;
		$npage = ceil($total / $dataperpage);
		
		$start = $curpage * $dataperpage;
		$end = $start + $dataperpage;
		$query = $this->db->query("SELECT * FROM `tb_user` WHERE ($where) AND ID_LEVEL_USER = '$level' LIMIT $start, $end");
		$hasil = array(
			'data' => array(),
			'pagination' => '',
			'numpage' => $npage - 1,
		);
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$hasil['data'][] = array(
					'id' => $row->ID_USER,
					'id_l' => $row->ID_LEVEL_USER,
					'nama' => $row->NAMA_USER,
					'aktivitas' => $row->AKTIVITAS_USER,
					'induk' => $row->NO_INDUK_USER,
					'facebook' => $row->ID_FACEBOOK_USER
				);
			}
		}
		
		$hasil['pagination'] .= '<ul>
			<li class="'. ($curpage == 0 ? 'disabled' : '') .'" onclick="return Mahasiswa.prevPage()"><a href>&laquo;</li>';
		for ($i = 1; $i <= $npage; $i++) {
			$hasil['pagination'] .= '<li class="' . ($curpage == ($i - 1) ? 'active' : '') . '" onclick="return Mahasiswa.setPage(' . ($i - 1) .')"><a href>' . $i . '</a></li>';
		}
		$hasil['pagination'] .= '<li class="' . ($curpage == $npage - 1 ? 'disabled' : '') . '" onclick="return Mahasiswa.nextPage()"><a href>&raquo;</a></li>
			</ul>';
		
		echo json_encode($hasil, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
	}
}