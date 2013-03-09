<?php

class Mahasiswa_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	
	public function tampil_profil_mahasiswa() {
		$query=$this->db->get_where('tb_profil', array('ID_USER'=>9));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function tampilJurnal(){
	$this->load->helper('download');
		$query=$this->db->get_where('tb_dokumen', array('ID_KATEGORI_DOKUMEN'=>1));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}

	
}