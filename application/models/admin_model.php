<?php

class Admin_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	
	public function tampilUserDosen() {
		$query=$this->db->get('tb_user');
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
}