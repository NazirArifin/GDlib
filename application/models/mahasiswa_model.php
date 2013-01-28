<?php

class Mahasiswa_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	public function tampilJurnal(){
		$query=$this->db->get_where('tb_dokumen', array('ID_KATEGORI_DOKUMEN'=>1));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
}