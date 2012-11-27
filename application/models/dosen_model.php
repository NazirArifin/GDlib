<?php

class Dosen_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	public function tampil_dosen(){
		$query=$this->db->get('tb_user');
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
}
