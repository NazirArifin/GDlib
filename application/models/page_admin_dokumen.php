<?php
class Page_admin_dokumen extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	
	public function get_users($limit) {
		$sql = $this->db->get('nama_tabel')->limit('$limit');
		$query = $this->db->query($sql);
		$users = array();
		foreach ($query->result() as $row) {
			$users[] = array(
				'id_dokumen'   => $row->ID_DOKUMEN,
				'judul_dokumen'  => $row->JUDUL_DOKUMEN,
				'kata_kunci_dokumen'     => $row->KATA_KUNCI_DOKUMEN
			);
		}

		return $users;
	}
}