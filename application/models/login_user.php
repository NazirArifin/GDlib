<?php
class Login_user extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	
	public function loginku($nama){
		$query = $this->db->query("SELECT * FROM tb_user WHERE NAMA_USER = '$nama'");
		if($query->num_rows()==0){
			return false;
		} else {
			$row = $query->row();
			return array(
				'nama' => $row->NAMA_USER,
				'level' => $row->ID_LEVEL_USER
			);
		}
	}
}